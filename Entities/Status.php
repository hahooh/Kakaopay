<?php

namespace KakaoPay\Entities;

class Status
{
    public static $PAYMENT_STATUS_READY = 'READY';
    public static $PAYMENT_STATUS_SEND_TMS = 'SEND_TMS';
    public static $PAYMENT_STATUS_OPEN_PAYMENT = 'OPEN_PAYMENT';
    public static $PAYMENT_STATUS_SELECT_METHOD = 'SELECT_METHOD';
    public static $PAYMENT_STATUS_ARS_WAITING = 'ARS_WAITING';
    public static $PAYMENT_STATUS_AUTH_PASSWORD = 'AUTH_PASSWORD';
    public static $PAYMENT_STATUS_ISSUED_SID = 'ISSUED_SID';
    public static $PAYMENT_STATUS_SUCCESS_PAYMENT = 'SUCCESS_PAYMENT';
    public static $PAYMENT_STATUS_PART_CANCEL_PAYMENT = 'PART_CANCEL_PAYMENT';
    public static $PAYMENT_STATUS_CANCEL_PAYMENT = 'CANCEL_PAYMENT';
    public static $PAYMENT_STATUS_FAIL_AUTH_PASSWORD = 'FAIL_AUTH_PASSWORD';
    public static $PAYMENT_STATUS_QUIT_PAYMENT = 'QUIT_PAYMENT';
    public static $PAYMENT_STATUS_FAIL_PAYMENT = 'FAIL_PAYMENT';

    private $status;

    public function __construct(string $status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     * @return Status
     */
    public function setStatus($status): Status
    {
        $this->status = $status;
        return $this;
    }
}