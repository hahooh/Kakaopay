<?php

namespace KakaoPay\Response;

class FailedResponse extends BaseResponse
{
    protected $code;
    protected $msg;
    /**
     * @var \KakaoPay\Entities\Extra
     */
    protected $extra;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     * @return FailedResponse
     */
    public function setCode($code): FailedResponse
    {
        $this->code = $code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMsg()
    {
        return $this->msg;
    }

    /**
     * @param mixed $msg
     * @return FailedResponse
     */
    public function setMsg($msg): FailedResponse
    {
        $this->msg = $msg;
        return $this;
    }

    /**
     * @return \KakaoPay\Entities\Extra
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * @param \KakaoPay\Entities\Extra $extra
     * @return FailedResponse
     */
    public function setExtra($extra): FailedResponse
    {
        $this->extra = $extra;
        return $this;
    }
}