<?php

namespace KakaoPay\Request;

use KakaoPay\Client;

class CancelPaymentRequest extends BaseRequest
{
    private $requestType;
    protected $tid;
    protected $cancel_amount;
    protected $cancel_tax_free_amount;
    protected $cancel_val_amount;
    protected $cancel_available_amount;
    protected $payload;

    public function __construct()
    {
        $this->setMethod('POST');
        $this->requestType = Client::$RESPONSE_TYPE_CANCEL_PAYMENT;
        $this->setEndPoint('https://kapi.kakao.com/v1/payment/cancel');
    }

    /**
     * @param mixed $cid_secrete
     * @return CancelPaymentRequest
     */
    public function setCidSecrete($cid_secrete): CancelPaymentRequest
    {
        $this->cid_secrete = $cid_secrete;
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
     * @return CancelPaymentRequest
     */
    public function setTid($tid): CancelPaymentRequest
    {
        $this->tid = $tid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCancelAmount()
    {
        return $this->cancel_amount;
    }

    /**
     * @param mixed $cancel_amount
     * @return CancelPaymentRequest
     */
    public function setCancelAmount($cancel_amount): CancelPaymentRequest
    {
        $this->cancel_amount = $cancel_amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCancelTaxfreeamount()
    {
        return $this->cancel_tax_free_amount;
    }

    /**
     * @param mixed $cancel_tax_free_amount
     * @return CancelPaymentRequest
     */
    public function setCancelTaxfreeamount($cancel_tax_free_amount): CancelPaymentRequest
    {
        $this->cancel_tax_free_amount = $cancel_tax_free_amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCancelValamount()
    {
        return $this->cancel_val_amount;
    }

    /**
     * @param mixed $cancel_val_amount
     * @return CancelPaymentRequest
     */
    public function setCancelValamount($cancel_val_amount): CancelPaymentRequest
    {
        $this->cancel_val_amount = $cancel_val_amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCancelAvailableamount()
    {
        return $this->cancel_available_amount;
    }

    /**
     * @param mixed $cancel_available_amount
     * @return CancelPaymentRequest
     */
    public function setCancelAvailableamount($cancel_available_amount): CancelPaymentRequest
    {
        $this->cancel_available_amount = $cancel_available_amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPayload()
    {
        return $this->payload;
    }

    /**
     * @param mixed $payload
     * @return CancelPaymentRequest
     */
    public function setPayload($payload): CancelPaymentRequest
    {
        $this->payload = $payload;
        return $this;
    }

    public function getResponseType(): string
    {
        return $this->requestType;
    }
}