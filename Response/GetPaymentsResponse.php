<?php

namespace KakaoPay\Response;

use KakaoPay\Entities\Payment;

class GetPaymentsResponse
{
    protected $page;
    protected $payment_request_date;
    protected $cid;
    protected $orders;

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     * @return GetPaymentsResponse
     */
    public function setPage($page): GetPaymentsResponse
    {
        $this->page = $page;
        return $this;
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
     * @return GetPaymentsResponse
     */
    public function setPaymentRequestDate($payment_request_date): GetPaymentsResponse
    {
        $this->payment_request_date = $payment_request_date;
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
     * @return GetPaymentsResponse
     */
    public function setCid($cid): GetPaymentsResponse
    {
        $this->cid = $cid;
        return $this;
    }

    /**
     * @return Payment[]
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param mixed $orders
     * @return GetPaymentsResponse
     */
    public function setOrders($orders): GetPaymentsResponse
    {
        $this->orders = $orders;
        return $this;
    }
}