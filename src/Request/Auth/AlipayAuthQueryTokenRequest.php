<?php

namespace Alipay\GlobalApiSDK\Request\Auth;

use Alipay\GlobalApiSDK\Request\AlipayRequest;

class AlipayAuthQueryTokenRequest extends AlipayRequest{
    public $accessToken;

    /**
     * @return mixed
     */
    public function getAccessToken(){
        return $this->accessToken;
    }

    /**
     * @param mixed $accessToken
     */
    public function setAccessToken($accessToken){
        $this->accessToken = $accessToken;
    }

}