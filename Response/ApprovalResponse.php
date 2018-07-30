<?php

namespace KakaoPay\Response;

class ApprovalResponse
{
    protected $aid;
    protected $tid;
    protected $cid;
    protected $sid;
    protected $partner_order_id;
    protected $partner_user_id;
    protected $payment_method_type;
    protected $amount;
    protected $card_info;
    protected $item_name;
    protected $item_code;
    protected $quantity;
    protected $created_at;
    protected $approved_at;
    protected $payload;

    /**
     * @return mixed
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @param mixed $aid
     * @return ApprovalResponse
     */
    public function setAid($aid): ApprovalResponse
    {
        $this->aid = $aid;
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
     * @return ApprovalResponse
     */
    public function setTid($tid): ApprovalResponse
    {
        $this->tid = $tid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param mixed $cid
     * @return ApprovalResponse
     */
    public function setCid($cid): ApprovalResponse
    {
        $this->cid = $cid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSid()
    {
        return $this->sid;
    }

    /**
     * @param mixed $sid
     * @return ApprovalResponse
     */
    public function setSid($sid): ApprovalResponse
    {
        $this->sid = $sid;
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
     * @return ApprovalResponse
     */
    public function setPartnerOrderId($partner_order_id): ApprovalResponse
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
     * @return ApprovalResponse
     */
    public function setPartnerUserId($partner_user_id): ApprovalResponse
    {
        $this->partner_user_id = $partner_user_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodType()
    {
        return $this->payment_method_type;
    }

    /**
     * @param mixed $payment_method_type
     * @return ApprovalResponse
     */
    public function setPaymentMethodType($payment_method_type): ApprovalResponse
    {
        $this->payment_method_type = $payment_method_type;
        return $this;
    }

    /**
     * @return \KakaoPay\Entities\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param \KakaoPay\Entities\Amount $amount
     * @return ApprovalResponse
     */
    public function setAmount($amount): ApprovalResponse
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return \KakaoPay\Entities\CardInfo
     */
    public function getCardInfo()
    {
        return $this->card_info;
    }

    /**
     * @param \KakaoPay\Entities\CardInfo $card_info
     * @return ApprovalResponse
     */
    public function setCardInfo($card_info): ApprovalResponse
    {
        $this->card_info = $card_info;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemName()
    {
        return $this->item_name;
    }

    /**
     * @param mixed $item_name
     * @return ApprovalResponse
     */
    public function setItemName($item_name): ApprovalResponse
    {
        $this->item_name = $item_name;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getItemCode()
    {
        return $this->item_code;
    }

    /**
     * @param mixed $item_code
     * @return ApprovalResponse
     */
    public function setItemCode($item_code): ApprovalResponse
    {
        $this->item_code = $item_code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param mixed $quantity
     * @return ApprovalResponse
     */
    public function setQuantity($quantity): ApprovalResponse
    {
        $this->quantity = $quantity;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     * @return ApprovalResponse
     */
    public function setCreatedAt($created_at): ApprovalResponse
    {
        $this->created_at = $created_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApprovedAt()
    {
        return $this->approved_at;
    }

    /**
     * @param mixed $approved_at
     * @return ApprovalResponse
     */
    public function setApprovedAt($approved_at): ApprovalResponse
    {
        $this->approved_at = $approved_at;
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
     * @return ApprovalResponse
     */
    public function setPayload($payload): ApprovalResponse
    {
        $this->payload = $payload;
        return $this;
    }
}