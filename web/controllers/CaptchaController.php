<?php

class CaptchaController
{

    private  $captcha_service ;

    public function __construct(CaptChaService $captcha_service)
    {
        $this->captcha_service = $captcha_service;
    }

    public function captcha()
    {
        return $this->captcha_service->getCaptCha();
    }
}