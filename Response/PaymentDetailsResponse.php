<?php

namespace KakaoPay\Response;

use KakaoPay\Entities\Amount;
use KakaoPay\Entities\CardInfo;
use KakaoPay\Entities\Status;

class PaymentDetailsResponse
{
    protected $tid;
    protected $cid;
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
    protected $selected_card_info;
    protected $payment_action_details;

    /**
     * @return mixed
     */
    public function getTid()
    {
        return $this->tid;
    }

    /**
     * @param mixed $tid
     * @return PaymentDetailsResponse
     */
    public function setTid($tid): PaymentDetailsResponse
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
     * @return PaymentDetailsResponse
     */
    public function setCid($cid): PaymentDetailsResponse
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
     * @param Status $status
     * @return PaymentDetailsResponse
     */
    public function setStatus($status): PaymentDetailsResponse
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
     * @return PaymentDetailsResponse
     */
    public function setPartnerOrderId($partner_order_id): PaymentDetailsResponse
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
     * @return PaymentDetailsResponse
     */
    public function setPartnerUserId($partner_user_id): PaymentDetailsResponse
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
     * @return PaymentDetailsResponse
     */
    public function setPaymentMethodType($payment_method_type): PaymentDetailsResponse
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
     * @return PaymentDetailsResponse
     */
    public function setAmount($amount): PaymentDetailsResponse
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
     * @return PaymentDetailsResponse
     */
    public function setCanceledAmount($canceled_amount): PaymentDetailsResponse
    {
        $this->canceled_amount = $canceled_amount;
        return $this;
    }

    /**
     * @return Amount
     */
    public function getCanceledAvailableAmount()
    {
        return $this->canceled_available_amount;
    }

    /**
     * @param Amount $canceled_available_amount
     * @return PaymentDetailsResponse
     */
    public function setCanceledAvailableAmount($canceled_available_amount): PaymentDetailsResponse
    {
        $this->canceled_available_amount = $canceled_available_amount;
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
     * @return PaymentDetailsResponse
     */
    public function setItemName($item_name): PaymentDetailsResponse
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
     * @return PaymentDetailsResponse
     */
    public function setItemCode($item_code): PaymentDetailsResponse
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
     * @return PaymentDetailsResponse
     */
    public function setQuantity($quantity): PaymentDetailsResponse
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
     * @return PaymentDetailsResponse
     */
    public function setCreatedAt($created_at): PaymentDetailsResponse
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
     * @return PaymentDetailsResponse
     */
    public function setApprovedAt($approved_at): PaymentDetailsResponse
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
     * @return PaymentDetailsResponse
     */
    public function setCanceledAt($canceled_at): PaymentDetailsResponse
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
     * @return PaymentDetailsResponse
     */
    public function setSelectedCardInfo($selected_card_info): PaymentDetailsResponse
    {
        $this->selected_card_info = $selected_card_info;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentActionDetails()
    {
        return $this->payment_action_details;
    }

    /**
     * @param mixed $payment_action_details
     * @return PaymentDetailsResponse
     */
    public function setPaymentActionDetails($payment_action_details): PaymentDetailsResponse
    {
        $this->payment_action_details = $payment_action_details;
        return $this;
    }
}