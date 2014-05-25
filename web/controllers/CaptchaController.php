<?php
use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class CaptchaController
{
    private $captchaService;
    public function __construct(CaptchaService $captchaService)
    {
        $this->captchaService = $captchaService;
    }

    public function captcha()
    {
        return $this->captchaService->getCaptcha();
    }
}