<?php
require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app->get('/hello/{name}', function($name) use($app) {
    return 'Hello '.$app->escape($name);
});

$app->get('/api/v7/captcha', function() use($app) {
    $captcha = new CaptChaService();
    return $captcha->getCaptCha()->toString();
});

$app->run();