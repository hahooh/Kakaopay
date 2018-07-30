<?php

namespace KakaoPay\Entities;

class ActionDetails
{
    private $aid;
    private $approval_at;
    private $amount;
    private $point_amount;
    private $discount_amount;
    private $payment_action_type;
    private $payload;

    /**
     * @return mixed
     */
    public function getAid()
    {
        return $this->aid;
    }

    /**
     * @param mixed $aid
     * @return ActionDetails
     */
    public function setAid($aid): ActionDetails
    {
        $this->aid = $aid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApprovalAt()
    {
        return $this->approval_at;
    }

    /**
     * @param mixed $approval_at
     * @return ActionDetails
     */
    public function setApprovalAt($approval_at): ActionDetails
    {
        $this->approval_at = $approval_at;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     * @return ActionDetails
     */
    public function setAmount($amount): ActionDetails
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPointAmount()
    {
        return $this->point_amount;
    }

    /**
     * @param mixed $point_amount
     * @return ActionDetails
     */
    public function setPointAmount($point_amount): ActionDetails
    {
        $this->point_amount = $point_amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscountAmount()
    {
        return $this->discount_amount;
    }

    /**
     * @param mixed $discount_amount
     * @return ActionDetails
     */
    public function setDiscountAmount($discount_amount): ActionDetails
    {
        $this->discount_amount = $discount_amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentActionType()
    {
        return $this->payment_action_type;
    }

    /**
     * @param mixed $payment_action_type
     * @return ActionDetails
     */
    public function setPaymentActionType($payment_action_type): ActionDetails
    {
        $this->payment_action_type = $payment_action_type;
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
     * @return ActionDetails
     */
    public function setPayload($payload): ActionDetails
    {
        $this->payload = $payload;
        return $this;
    }
}