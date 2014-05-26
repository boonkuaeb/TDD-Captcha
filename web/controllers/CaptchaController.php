<?php
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class CaptchaController
{
    private $captchaService;
    public function __construct(CaptChaService $captchaService)
    {
        $this->captchaService = $captchaService;
    }

    public function captcha()
    {
        return $this->captchaService->getCaptCha()->toString();
    }
}