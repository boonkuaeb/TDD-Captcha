<?php
require_once __DIR__.'/../../vendor/autoload.php';
class CaptchawebTest extends Silex\WebTestCase {
    public function createApplication() {
        $app = null;
        include __DIR__.'/../../web/index.php';
        return $app;
    }

    public function testCaptcha() {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/api/v7/captcha');

        $this->assertTrue($client->getResponse()->isOk());
    }
/*
    public function testCaptchaContent() {
        $client = $this->createClient();
        $crawler = $client->request('GET', '/api/v7/captcha');

        $this->assertRegExp("/\w+\s(\+|\*|\-)\s\w+\s\=/",$client->getResponse()->getContent());
    }*/
}
