<?php

namespace KakaoPay\Request;

use KakaoPay\Client;

/**
 * Class SinglePaymentRequest
 * @package KakaoPay\Request
 * @method SinglePaymentRequest setCidSecret(string $cidSecret)
 */
class SinglePaymentRequest extends BaseRequest
{
    private $requestType;
    protected $partner_order_id;
    protected $partner_user_id;
    protected $item_name;
    protected $item_code;
    protected $quantity;
    protected $total_amount;
    protected $tax_free_amount;
    protected $vat_amount;
    protected $approval_url;
    protected $cancel_url;
    protected $fail_url;
    protected $available_cards;
    protected $payment_method_type;
    protected $install_month;
    protected $custom_json;

    public function __construct()
    {
        $this->setMethod('POST');
        $this->setEndPoint('https://kapi.kakao.com/v1/payment/ready');
        $this->requestType = Client::$RESPONSE_TYPE_SINGLE_PAYMENT;
    }

    /**
     * @param mixed $cidSecrete
     * @return SinglePaymentRequest
     */
    public function setCidSecrete($cidSecrete): SinglePaymentRequest
    {
        $this->cidSecrete = $cidSecrete;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartnerOrderid()
    {
        return $this->partner_order_id;
    }

    /**
     * @param mixed $partner_order_id
     * @return SinglePaymentRequest
     */
    public function setPartnerOrderid($partner_order_id): SinglePaymentRequest
    {
        $this->partner_order_id = $partner_order_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPartnerUserid()
    {
        return $this->partner_user_id;
    }

    /**
     * @param mixed $partner_user_id
     * @return SinglePaymentRequest
     */
    public function setPartnerUserid($partner_user_id): SinglePaymentRequest
    {
        $this->partner_user_id = $partner_user_id;
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
     * @return SinglePaymentRequest
     */
    public function setItemName($item_name): SinglePaymentRequest
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
     * @return SinglePaymentRequest
     */
    public function setItemCode($item_code): SinglePaymentRequest
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
     * @return SinglePaymentRequest
     */
    public function setQuantity($quantity): SinglePaymentRequest
    {
        $this->quantity = $quantity;
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
     * @return SinglePaymentRequest
     */
    public function setTotalAmount($total_amount): SinglePaymentRequest
    {
        $this->total_amount = $total_amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxFreeamount()
    {
        return $this->tax_free_amount;
    }

    /**
     * @param mixed $tax_free_amount
     * @return SinglePaymentRequest
     */
    public function setTaxFreeamount($tax_free_amount): SinglePaymentRequest
    {
        $this->tax_free_amount = $tax_free_amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVatAmount()
    {
        return $this->vat_amount;
    }

    /**
     * @param mixed $vat_amount
     * @return SinglePaymentRequest
     */
    public function setVatAmount($vat_amount): SinglePaymentRequest
    {
        $this->vat_amount = $vat_amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApprovalUrl()
    {
        return $this->approval_url;
    }

    /**
     * @param mixed $approval_url
     * @return SinglePaymentRequest
     */
    public function setApprovalUrl($approval_url): SinglePaymentRequest
    {
        $this->approval_url = $approval_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCancelUrl()
    {
        return $this->cancel_url;
    }

    /**
     * @param mixed $cancel_url
     * @return SinglePaymentRequest
     */
    public function setCancelUrl($cancel_url): SinglePaymentRequest
    {
        $this->cancel_url = $cancel_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFailUrl()
    {
        return $this->fail_url;
    }

    /**
     * @param mixed $fail_url
     * @return SinglePaymentRequest
     */
    public function setFailUrl($fail_url): SinglePaymentRequest
    {
        $this->fail_url = $fail_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAvailableCards()
    {
        return $this->available_cards;
    }

    /**
     * @param mixed $available_cards
     * @return SinglePaymentRequest
     */
    public function setAvailableCards($available_cards): SinglePaymentRequest
    {
        $this->available_cards = $available_cards;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentMethodtype()
    {
        return $this->payment_method_type;
    }

    /**
     * @param mixed $payment_method_type
     * @return SinglePaymentRequest
     */
    public function setPaymentMethodtype($payment_method_type): SinglePaymentRequest
    {
        $this->payment_method_type = $payment_method_type;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInstallMonth()
    {
        return $this->install_month;
    }

    /**
     * @param mixed $install_month
     * @return SinglePaymentRequest
     */
    public function setInstallMonth($install_month): SinglePaymentRequest
    {
        $this->install_month = $install_month;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomJson()
    {
        return $this->custom_json;
    }

    /**
     * @param mixed $custom_json
     * @return SinglePaymentRequest
     */
    public function setCustomJson($custom_json): SinglePaymentRequest
    {
        $this->custom_json = $custom_json;
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