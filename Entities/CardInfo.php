<?php

namespace KakaoPay\Entities;

class CardInfo
{
    private $purchase_corp;
    private $purchase_corp_code;
    private $issuer_corp;
    private $issuer_corp_code;
    private $bin;
    private $card_type;
    private $install_month;
    private $approved_id;
    private $card_mid;
    private $interest_free_install;
    private $card_item_code;

    /**
     * @return mixed
     */
    public function getPurchaseCorp()
    {
        return $this->purchase_corp;
    }

    /**
     * @param mixed $purchase_corp
     * @return CardInfo
     */
    public function setPurchaseCorp($purchase_corp): CardInfo
    {
        $this->purchase_corp = $purchase_corp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPurchaseCorpCode()
    {
        return $this->purchase_corp_code;
    }

    /**
     * @param mixed $purchase_corp_code
     * @return CardInfo
     */
    public function setPurchaseCorpCode($purchase_corp_code): CardInfo
    {
        $this->purchase_corp_code = $purchase_corp_code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIssuerCorp()
    {
        return $this->issuer_corp;
    }

    /**
     * @param mixed $issuer_corp
     * @return CardInfo
     */
    public function setIssuerCorp($issuer_corp): CardInfo
    {
        $this->issuer_corp = $issuer_corp;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIssuerCorpCode()
    {
        return $this->issuer_corp_code;
    }

    /**
     * @param mixed $issuer_corp_code
     * @return CardInfo
     */
    public function setIssuerCorpCode($issuer_corp_code): CardInfo
    {
        $this->issuer_corp_code = $issuer_corp_code;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBin()
    {
        return $this->bin;
    }

    /**
     * @param mixed $bin
     * @return CardInfo
     */
    public function setBin($bin): CardInfo
    {
        $this->bin = $bin;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardType()
    {
        return $this->card_type;
    }

    /**
     * @param mixed $card_type
     * @return CardInfo
     */
    public function setCardType($card_type): CardInfo
    {
        $this->card_type = $card_type;
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
     * @return CardInfo
     */
    public function setInstallMonth($install_month): CardInfo
    {
        $this->install_month = $install_month;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getApprovedId()
    {
        return $this->approved_id;
    }

    /**
     * @param mixed $approved_id
     * @return CardInfo
     */
    public function setApprovedId($approved_id): CardInfo
    {
        $this->approved_id = $approved_id;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardMid()
    {
        return $this->card_mid;
    }

    /**
     * @param mixed $card_mid
     * @return CardInfo
     */
    public function setCardMid($card_mid): CardInfo
    {
        $this->card_mid = $card_mid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getInterestFreeInstall()
    {
        return $this->interest_free_install;
    }

    /**
     * @param mixed $interest_free_install
     * @return CardInfo
     */
    public function setInterestFreeInstall($interest_free_install): CardInfo
    {
        $this->interest_free_install = $interest_free_install;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardItemCode()
    {
        return $this->card_item_code;
    }

    /**
     * @param mixed $card_item_code
     * @return CardInfo
     */
    public function setCardItemCode($card_item_code): CardInfo
    {
        $this->card_item_code = $card_item_code;
        return $this;
    }
}