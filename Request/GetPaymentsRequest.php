<?php

namespace KakaoPay\Request;

use KakaoPay\Client;

class GetPaymentsRequest extends BaseRequest
{
    private $requestType;
    private $payment_request_date;
    private $tid;
    private $partner_order_id;
    private $partner_user_id;
    private $page;

    public function __construct()
    {
        $this->setMethod('GET');
        $this->requestType = Client::$RESPONSE_TYPE_GET_PAYMENTS;
    }

    /**
     * @return mixed
     */
    public function getPaymentRequestDate()
    {
        return $this->payment_request_date;
    }

    /**
     * @param mixed $payment_request_date
     * @return GetPaymentsRequest
     */
    public function setPaymentRequestDate($payment_request_date): GetPaymentsRequest
    {
        $this->payment_request_date = $payment_request_date;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @param mixed $tid
     * @return GetPaymentsRequest
     */
    public function setTid($tid): GetPaymentsRequest
    {
        $this->tid = $tid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartnerOrderId()
    {
        return $this->partner_order_id;
    }

    /**
     * @param mixed $partner_order_id
     * @return GetPaymentsRequest
     */
    public function setPartnerOrderId($partner_order_id): GetPaymentsRequest
    {
        $this->partner_order_id = $partner_order_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartnerUserId()
    {
        return $this->partner_user_id;
    }

    /**
     * @param mixed $partner_user_id
     * @return GetPaymentsRequest
     */
    public function setPartnerUserId($partner_user_id): GetPaymentsRequest
    {
        $this->partner_user_id = $partner_user_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     * @return GetPaymentsRequest
     */
    public function setPage($page): GetPaymentsRequest
    {
        $this->page = $page;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getResponseType(): string
    {
        return $this->requestType;
    }
}