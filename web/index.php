<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app->register(new Silex\Provider\ServiceControllerServiceProvider());

$app['captchaService'] = $app->share(function() {
    return new CaptchaService();
});

$app['captchaController'] = $app->share(function() use ($app) {
    return new CaptchaController($app['captchaService']);
});

$app['debug'] = TRUE;


$app->get('/',function(){
    return '';
});

$app->get('/api/v7/captcha','captchaController:captcha');


$app->run();