<?php

namespace KakaoPay\Request;

use KakaoPay\Client;

/**
 * Class ApprovalRequest
 * @package KakaoPay\Request
 * @method ApprovalRequest setCidSecret(string $cidSecret)
 */
class ApprovalRequest extends BaseRequest {
    private $requestType;
    protected $tid;
    protected $partner_order_id;
    protected $partner_user_id;
    protected $pg_token;
    protected $payload;
    protected $total_amount;

    public function __construct() {
        $this->setMethod('POST');
        $this->setEndPoint('https://kapi.kakao.com/v1/payment/approve');
        $this->requestType = Client::$RESPONSE_TYPE_APPROVAL;
    }

    /**
     * @param mixed $cid_secrete
     * @return ApprovalRequest
     */
    public function setCidSecrete($cid_secrete)
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
     * @return ApprovalRequest
     */
    public function setTid($tid): ApprovalRequest
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
     * @return ApprovalRequest
     */
    public function setPartnerOrderId($partner_order_id): ApprovalRequest
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
     * @return ApprovalRequest
     */
    public function setPartnerUserId($partner_user_id): ApprovalRequest
    {
        $this->partner_user_id = $partner_user_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPgToken()
    {
        return $this->pg_token;
    }

    /**
     * @param mixed $pg_token
     * @return ApprovalRequest
     */
    public function setPgToken($pg_token): ApprovalRequest
    {
        $this->pg_token = $pg_token;
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
     * @return ApprovalRequest
     */
    public function setPayload($payload): ApprovalRequest
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotalAmount()
    {
        return $this->total_amount;
    }

    /**
     * @param mixed $total_amount
     * @return ApprovalRequest
     */
    public function setTotalAmount($total_amount): ApprovalRequest
    {
        $this->total_amount = $total_amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getResponseType(): string
    {
        return $this->requestType;
    }
}