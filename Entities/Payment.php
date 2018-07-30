<?php

namespace KakaoPay\Entities;

class Payment
{
    public static $PAYMENT_TYPE_CARD = 'CARD';
    public static $PAYMENT_TYPE_MONEY = 'MONEY';

    private $tid;
    private $cid;
    private $status;
    private $partner_order_id;
    private $partner_user_id;
    private $payment_method_type;
    private $amount;
    private $canceled_amount;
    private $cancel_available_amount;
    private $item_name;
    private $item_code;
    private $quantity;
    private $created_at;
    private $approved_at;
    private $canceled_at;
    private $selected_card_info;
    private $payment_action_details;

    /**
     * @return mixed
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @param mixed $tid
     * @return Payment
     */
    public function setTid($tid)
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
     * @return Payment
     */
    public function setCid($cid)
    {
        $this->cid = $cid;
        return $this;
    }

    /**
     * @return Status
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param Status
     * @return Payment
     */
    public function setStatus($status): Payment
    {
        $this->status = $status;
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
     * @return Payment
     */
    public function setPartnerOrderId($partner_order_id): Payment
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
     * @return Payment
     */
    public function setPartnerUserId($partner_user_id): Payment
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
     * @return Payment
     */
    public function setPaymentMethodType($payment_method_type): Payment
    {
        $this->payment_method_type = $payment_method_type;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param Amount $amount
     * @return Payment
     */
    public function setAmount($amount): Payment
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getCanceledAmount()
    {
        return $this->canceled_amount;
    }

    /**
     * @param Amount $canceled_amount
     * @return Payment
     */
    public function setCanceledAmount($canceled_amount): Payment
    {
        $this->canceled_amount = $canceled_amount;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getCancelAvailableAmount()
    {
        return $this->cancel_available_amount;
    }

    /**
     * @param Amount $cancel_available_amount
     * @return Payment
     */
    public function setCancelAvailableAmount($cancel_available_amount): Payment
    {
        $this->cancel_available_amount = $cancel_available_amount;
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
     * @return Payment
     */
    public function setItemName($item_name): Payment
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
     * @return Payment
     */
    public function setItemCode($item_code): Payment
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
     * @return Payment
     */
    public function setQuantity($quantity): Payment
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
     * @return Payment
     */
    public function setCreatedAt($created_at): Payment
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
     * @return Payment
     */
    public function setApprovedAt($approved_at): Payment
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
     * @return Payment
     */
    public function setCanceledAt($canceled_at): Payment
    {
        $this->canceled_at = $canceled_at;
        return $this;
    }

    /**
     * @return CardInfo
     */
    public function getSelectedCardInfo()
    {
        return $this->selected_card_info;
    }

    /**
     * @param CardInfo $selected_card_info
     * @return Payment
     */
    public function setSelectedCardInfo($selected_card_info): Payment
    {
        $this->selected_card_info = $selected_card_info;
        return $this;
    }

    /**
     * @return ActionDetails
     */
    public function getPaymentActionDetails()
    {
        return $this->payment_action_details;
    }

    /**
     * @param ActionDetails $payment_action_details
     * @return Payment
     */
    public function setPaymentActionDetails($payment_action_details): Payment
    {
        $this->payment_action_details = $payment_action_details;
        return $this;
    }
}