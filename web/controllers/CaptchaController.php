<?php
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class CaptchaController
{
    public function captcha()
    {
        $captcha = new CaptChaService();
        return $captcha->getCaptCha()->toString();
    }
}