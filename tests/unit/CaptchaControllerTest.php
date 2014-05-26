<?php
class CaptchaControllerTest extends PHPUnit_Framework_TestCase
{
    public function testCaptchaController()
    {
        $stub_captcha_service = $this->getMock("CaptChaService");
        $stub_captcha_service->expects($this->any())->method("getCaptCha")->will($this->returnValue('One + 1 ='));

        $captchaController = new CaptchaController($stub_captcha_service);
        $this->assertEquals('One + 1 =',$captchaController->captcha());
    }
}