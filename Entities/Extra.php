<?php

namespace KakaoPay\Entities;

class Extra
{
    private $method_result_code;
    private $method_result_message;

    /**
     * @return mixed
     */
    public function getMethodResultCode()
    {
        return $this->method_result_code;
    }

    /**
     * @param mixed $method_result_code
     * @return Extra
     */
    public function setMethodResultCode($method_result_code): CardInfo
    {
        $this->method_result_code = $method_result_code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethodResultMessage()
    {
        return $this->method_result_message;
    }

    /**
     * @param mixed $method_result_message
     * @return Extra
     */
    public function setMethodResultMessage($method_result_message): CardInfo
    {
        $this->method_result_message = $method_result_message;
        return $this;
    }
}