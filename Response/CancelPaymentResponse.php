<?php

namespace KakaoPay\Response;
class CancelPaymentResponse
{
    protected $aid;
    protected $tid;
    protected $cid;
    /**
     * @var \KakaoPay\Entities\Status $status
     */
    protected $status;
    protected $partner_order_id;
    protected $partner_user_id;
    protected $payment_method_type;
    protected $amount;
    protected $canceled_amount;
    protected $canceled_available_amount;
    protected $item_name;
    protected $item_code;
    protected $quantity;
    protected $created_at;
    protected $approved_at;
    protected $canceled_at;
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
     * @return CancelPaymentResponse
     */
    public function setAid($aid): CancelPaymentResponse
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
     * @return CancelPaymentResponse
     */
    public function setTid($tid): CancelPaymentResponse
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
     * @return CancelPaymentResponse
     */
    public function setCid($cid): CancelPaymentResponse
    {
        $this->cid = $cid;
        return $this;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status->getStatus();
    }

    /**
     * @param string $status
     * @return CancelPaymentResponse
     */
    public function setStatus($status): CancelPaymentResponse
    {
        $this->status = new \KakaoPay\Entities\Status($status);
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
     * @return CancelPaymentResponse
     */
    public function setPartnerOrderId($partner_order_id): CancelPaymentResponse
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
     * @return CancelPaymentResponse
     */
    public function setPartnerUserId($partner_user_id): CancelPaymentResponse
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
     * @return CancelPaymentResponse
     */
    public function setPaymentMethodType($payment_method_type): CancelPaymentResponse
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
     * @return CancelPaymentResponse
     */
    public function setAmount($amount): CancelPaymentResponse
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return \KakaoPay\Entities\Amount
     */
    public function getCanceledAmount()
    {
        return $this->canceled_amount;
    }

    /**
     * @param \KakaoPay\Entities\Amount $canceled_amount
     * @return CancelPaymentResponse
     */
    public function setCanceledAmount($canceled_amount): CancelPaymentResponse
    {
        $this->canceled_amount = $canceled_amount;
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
     * @return CancelPaymentResponse
     */
    public function setItemName($item_name): CancelPaymentResponse
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
     * @return CancelPaymentResponse
     */
    public function setItemCode($item_code): CancelPaymentResponse
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
     * @return CancelPaymentResponse
     */
    public function setQuantity($quantity): CancelPaymentResponse
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
     * @return CancelPaymentResponse
     */
    public function setCreatedAt($created_at): CancelPaymentResponse
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
     * @return CancelPaymentResponse
     */
    public function setApprovedAt($approved_at): CancelPaymentResponse
    {
        $this->approved_at = $approved_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCanceledAt()
    {
        return $this->canceled_at;
    }

    /**
     * @param mixed $canceled_at
     * @return CancelPaymentResponse
     */
    public function setCanceledAt($canceled_at): CancelPaymentResponse
    {
        $this->canceled_at = $canceled_at;
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
     * @return CancelPaymentResponse
     */
    public function setPayload($payload): CancelPaymentResponse
    {
        $this->payload = $payload;
        return $this;
    }

    /**
     * @return \KakaoPay\Entities\Amount
     */
    public function getCanceledAvailableAmount()
    {
        return $this->canceled_available_amount;
    }

    /**
     * @param \KakaoPay\Entities\Amount $canceled_available_amount
     * @return $this
     */
    public function setCanceledAvailableAmount($canceled_available_amount): CancelPaymentResponse
    {
        $this->canceled_available_amount = $canceled_available_amount;
        return $this;
    }
}