<?php

namespace KakaoPay\Request;
abstract class BaseRequest implements \JsonSerializable
{
    protected $isTest;
    protected $method;
    protected $endPoint;
    protected $cid;
    protected $cid_secret;
    protected $adminKey;

    abstract public function getResponseType(): string;

    /**
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param mixed $cid
     * @return BaseRequest
     */
    public function setCid($cid): BaseRequest
    {
        $this->cid = $cid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * @param $method
     * @return $this
     */
    protected function setMethod($method): BaseRequest
    {
        $this->method = $method;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEndPoint()
    {
        return $this->endPoint;
    }

    /**
     * @param $endPoint
     * @return $this
     */
    protected function setEndPoint($endPoint): BaseRequest
    {
        $this->endPoint = $endPoint;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsTest(): bool
    {
        return $this->isTest;
    }

    /**
     * @param boolean $isTest
     * @return BaseRequest
     */
    public function setIsTest(bool $isTest): BaseRequest
    {
        $this->isTest = $isTest;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAdminKey()
    {
        return $this->adminKey;
    }

    /**
     * @param mixed $adminKey
     * @return BaseRequest
     */
    public function setAdminKey($adminKey): BaseRequest
    {
        $this->adminKey = $adminKey;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCidSecret()
    {
        return $this->cid_secret;
    }

    /**
     * @param $cid_secret
     * @return $this
     */
    public function setCidSecret($cid_secret): BaseRequest
    {
        $this->cid_secret = $cid_secret;
        return $this;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        // TODO: Implement jsonSerialize() method.
        $vars = get_object_vars($this);

        foreach ($vars as $index => $var) {
            if ($var === null) {
                unset($vars[$index]);
            }
        }

        unset($vars['isTest'], $vars['adminKey'], $vars['endPoint'], $vars['method']);

        return $vars;
    }
}