<?php
// web/index.php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/',function(){
   return '';
});

$app->get('/api/v7/captcha', function () use ($app) {
    $captchaController = new CaptchaController(new CaptChaService());
    return $captchaController->captcha();
});

$app->run();
