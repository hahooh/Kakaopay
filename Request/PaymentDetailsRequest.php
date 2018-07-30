<?php

namespace KakaoPay\Request;
use KakaoPay\Client;

class PaymentDetailsRequest extends BaseRequest {
    private $requestType;
    private $tid;

    public function __construct() {
        $this->setMethod('GET');
        $this->requestType = Client::$RESPONSE_TYPE_PAYMENT_DETAILS;
    }

    /**
     * @return mixed
     */
    public function getTid() {
        return $this->tid;
    }

    /**
     * @param mixed $tid
     * @return PaymentDetailsRequest
     */
    public function setTid($tid): PaymentDetailsRequest{
        $this->tid = $tid;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseType(): string {
        return $this->requestType;
    }
}