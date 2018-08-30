<?php

namespace KakaoPay\Response;
class SinglePaymentResponse extends BaseResponse {
    private $tid;
    protected $next_redirect_app_url;
    protected $next_redirect_mobile_url;
    protected $next_redirect_pc_url;
    protected $android_app_scheme;
    protected $ios_app_scheme;
    protected $created_at;

    /**
     * @return mixed
     */
    public function getTid() {
        return $this->tid;
    }

    /**
     * @param mixed $tid
     * @return SinglePaymentResponse
     */
    public function setTid($tid): SinglePaymentResponse {
        $this->tid = $tid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNextRedirectAppUrl() {
        return $this->next_redirect_app_url;
    }

    /**
     * @param mixed $next_redirect_app_url
     * @return SinglePaymentResponse
     */
    public function setNextRedirectAppUrl($next_redirect_app_url): SinglePaymentResponse {
        $this->next_redirect_app_url = $next_redirect_app_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNextRedirectMobileUrl() {
        return $this->next_redirect_mobile_url;
    }

    /**
     * @param mixed $next_redirect_mobile_url
     * @return SinglePaymentResponse
     */
    public function setNextRedirectMobileUrl($next_redirect_mobile_url): SinglePaymentResponse {
        $this->next_redirect_mobile_url = $next_redirect_mobile_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNextRedirectPcUrl() {
        return $this->next_redirect_pc_url;
    }

    /**
     * @param mixed $next_redirect_pc_url
     * @return SinglePaymentResponse
     */
    public function setNextRedirectPcUrl($next_redirect_pc_url): SinglePaymentResponse {
        $this->next_redirect_pc_url = $next_redirect_pc_url;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAndroidAppScheme() {
        return $this->android_app_scheme;
    }

    /**
     * @param mixed $android_app_scheme
     * @return SinglePaymentResponse
     */
    public function setAndroidAppScheme($android_app_scheme): SinglePaymentResponse {
        $this->android_app_scheme = $android_app_scheme;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getIosAppScheme() {
        return $this->ios_app_scheme;
    }

    /**
     * @param mixed $ios_app_scheme
     * @return SinglePaymentResponse
     */
    public function setIosAppScheme($ios_app_scheme): SinglePaymentResponse {
        $this->ios_app_scheme = $ios_app_scheme;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt() {
        return $this->created_at;
    }

    /**
     * @param mixed $created_at
     * @return SinglePaymentResponse
     */
    public function setCreatedAt($created_at): SinglePaymentResponse {
        $this->created_at = $created_at;
        return $this;
    }
}