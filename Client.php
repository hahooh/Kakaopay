<?php

namespace KakaoPay;

use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use JsonMapper;
use KakaoPay\Entities\Amount;
use KakaoPay\Entities\CardInfo;
use KakaoPay\Entities\Extra;
use KakaoPay\Request\BaseRequest;
use KakaoPay\Response\ApprovalResponse;
use KakaoPay\Response\CancelPaymentResponse;
use KakaoPay\Response\FailedResponse;
use KakaoPay\Response\GetPaymentsResponse;
use KakaoPay\Response\PaymentDetailsResponse;
use KakaoPay\Response\SinglePaymentResponse;

class Client
{
    public static $RESPONSE_TYPE_SINGLE_PAYMENT = SinglePaymentResponse::class;
    public static $RESPONSE_TYPE_APPROVAL = ApprovalResponse::class;
    public static $RESPONSE_TYPE_FAIL = FailedResponse::class;
    public static $RESPONSE_TYPE_CANCEL_PAYMENT = CancelPaymentResponse::class;
    public static $RESPONSE_TYPE_GET_PAYMENTS = GetPaymentsResponse::class;
    public static $RESPONSE_TYPE_PAYMENT_DETAILS = PaymentDetailsResponse::class;

    private $contentType;
    private $request;
    private $accessToken;
    private $adminKey;

    public function __construct(BaseRequest $request = null, string $accessToken = null)
    {
        $this->request = $request;
        $this->accessToken = $accessToken;
    }

    /**
     * @param null $contentType
     * @return object
     * @throws GuzzleException
     * @throws \JsonMapper_Exception
     */
    public function execute($contentType = null)
    {
        $client = new \GuzzleHttp\Client();

        try {
            $res = $client->request($this->request->getMethod(), $this->request->getEndPoint(), [
                RequestOptions::HEADERS => $this->get_headers(),
                RequestOptions::FORM_PARAMS => $this->request->jsonSerialize()
            ]);
            $responseType = $this->request->getResponseType();
        } catch (BadResponseException $exception) {
            $res = $exception->getResponse();
            $responseType = FailedResponse::class;
        }

        $body = $res->getBody()->getContents();
        return $this->map_response($responseType, json_decode($body));
    }

    /**
     * @param string $responseType
     * @param object $jsonObject
     * @return object
     * @throws \JsonMapper_Exception
     */
    private function map_response(string $responseType, $jsonObject)
    {
        $jsonMapper = new \JsonMapper();

        switch ($responseType) {
            case self::$RESPONSE_TYPE_APPROVAL:
                $jsonObject = $this->get_approval_response($jsonMapper, $jsonObject);
                break;
            case self::$RESPONSE_TYPE_FAIL:
                $jsonObject = $this->get_failed_response($jsonMapper, $jsonObject);
                break;
            case self::$RESPONSE_TYPE_CANCEL_PAYMENT:
                $jsonObject = $this->get_cancel_payment_response($jsonMapper, $jsonObject);
                break;
        }

        return $jsonMapper->map($jsonObject, new $responseType);
    }

    /**
     * @param JsonMapper $jsonMapper
     * @param $jsonObject
     * @return object
     * @throws \JsonMapper_Exception
     */
    private function get_cancel_payment_response(JsonMapper $jsonMapper, $jsonObject)
    {
        $jsonObject->amount = $jsonMapper->map($jsonObject->amount, new Amount());
        $jsonObject->canceled_amount = $jsonMapper->map($jsonObject->canceled_amount, new Amount());
        $jsonObject->cancel_available_amount = $jsonMapper->map($jsonObject->cancel_available_amount, new Amount());
        return $jsonObject;
    }

    /**
     * @param JsonMapper $jsonMapper
     * @param $jsonObject
     * @return object
     * @throws \JsonMapper_Exception
     */
    private function get_failed_response(JsonMapper $jsonMapper, $jsonObject)
    {
        if (isset($jsonObject->extras)) {
            $jsonObject->extras = $jsonMapper->map($jsonObject->extras, new Extra());
        } else {
            $jsonObject->extras = null;
        }
        return $jsonObject;
    }

    /**
     * @param JsonMapper $jsonMapper
     * @param object $jsonObject
     * @return object
     * @throws \JsonMapper_Exception
     */
    private function get_approval_response(JsonMapper $jsonMapper, $jsonObject)
    {
        $amount = $jsonMapper->map($jsonObject->amount, new Amount());
        if (isset($jsonObject->card_info)) {
            $cardInfo = $jsonMapper->map($jsonObject->card_info, new CardInfo());
        } else {
            $cardInfo = null;
        }
        $jsonObject->amount = $amount;
        $jsonObject->card_info = $cardInfo;
        return $jsonObject;
    }

    /**
     * @return array
     */
    private function get_headers()
    {
        $auth = $this->adminKey;
        return [
            'Authorization' => 'KakaoAK ' . $auth,
            'Content-type' => 'application/x-www-form-urlencoded'
        ];
    }

    /**
     * @return string
     */
    public function getAccessToken(): string
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     * @return $this
     */
    public function setAccessToken(string $accessToken)
    {
        $this->accessToken = $accessToken;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param mixed $contentType
     * @return Client
     */
    public function setContentType($contentType): Client
    {
        $this->contentType = $contentType;
        return $this;
    }

    /**
     * @return BaseRequest
     */
    public function getRequest(): BaseRequest
    {
        return $this->request;
    }

    /**
     * @param BaseRequest $request
     * @return Client
     */
    public function setRequest(BaseRequest $request): Client
    {
        $this->request = $request;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdminKey()
    {
        return $this->adminKey;
    }

    /**
     * @param mixed $adminKey
     * @return Client
     */
    public function setAdminKey($adminKey): Client
    {
        $this->adminKey = $adminKey;
        return $this;
    }
}