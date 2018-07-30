<?php

namespace KakaoPay\Entities;

class Amount
{
    private $total;
    private $tax_free;
    private $vat;
    private $discount;
    private $point;

    /**
     * @return mixed
     */
    public function getPoint()
    {
        return $this->point;
    }

    /**
     * @param int $point
     * @return Amount
     */
    public function setPoint(int $point): Amount
    {
        $this->point = $point;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * @param mixed $total
     * @return Amount
     */
    public function setTotal($total): Amount
    {
        $this->total = $total;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTaxFree()
    {
        return $this->tax_free;
    }

    /**
     * @param mixed $tax_free
     * @return Amount
     */
    public function setTaxFree($tax_free): Amount
    {
        $this->tax_free = $tax_free;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @param mixed $vat
     * @return Amount
     */
    public function setVat($vat): Amount
    {
        $this->vat = $vat;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * @param mixed $discount
     * @return Amount
     */
    public function setDiscount($discount): Amount
    {
        $this->discount = $discount;
        return $this;
    }
}