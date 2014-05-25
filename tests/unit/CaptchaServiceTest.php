<?php

#require_once('./CaptchaService.php');

class CaptchaServiceTest extends PHPUnit_Framework_TestCase
{
    public function testGetCaptchaShould_Return_Captcha_With_Input_1111()
    {
        $stubRandom = $this->getMock("Random");
        $stubRandom->expects($this->any())->method("getOperand")->will($this->returnValue(1));
        $stubRandom->expects($this->any())->method("getPattern")->will($this->returnValue(1));
        $stubRandom->expects($this->any())->method("getOperator")->will($this->returnValue(1));

        $captcha_service = new CaptChaService();
        $captcha_service->setRandom($stubRandom);
        $captcha = $captcha_service->getCaptCha();

        $this->assertEquals("One", $captcha->getLeftOperand());
        $this->assertEquals("1", $captcha->getRightOperand());
        $this->assertEquals("+", $captcha->getOperator());
    }

    public function testGetCaptchaShould_Return_Captcha_With_Input_2112()
    {
        $stubRandom = $this->getMock("Random");
        $stubRandom->expects($this->any())->method("getOperand")->will($this->returnValue(1));
        $stubRandom->expects($this->any())->method("getPattern")->will($this->returnValue(2));
        $stubRandom->expects($this->any())->method("getOperator")->will($this->returnValue(2));

        $captcha_service = new CaptChaService();
        $captcha_service->setRandom($stubRandom);
        $captcha = $captcha_service->getCaptCha();

        $this->assertEquals("1", $captcha->getLeftOperand());
        $this->assertEquals("One", $captcha->getRightOperand());
        $this->assertEquals("*", $captcha->getOperator());

    }

    public function testGetCaptchaShould_Return_Captcha_With_Input_2113()
    {
        $stubRandom = $this->getMock("Random");
        $stubRandom->expects($this->any())->method("getOperand")->will($this->returnValue(1));
        $stubRandom->expects($this->any())->method("getPattern")->will($this->returnValue(2));
        $stubRandom->expects($this->any())->method("getOperator")->will($this->returnValue(3));

        $captcha_service = new CaptChaService();
        $captcha_service->setRandom($stubRandom);
        $captcha = $captcha_service->getCaptCha();

        $this->assertEquals("1", $captcha->getLeftOperand());
        $this->assertEquals("One", $captcha->getRightOperand());
        $this->assertEquals("-", $captcha->getOperator());

    }

    public function test1111toString_Should_Return_toString()
    {
        $captcha = new CaptCha(1,1,1,1);
        $this->assertEquals("One + 1", $captcha->toString());
    }
}