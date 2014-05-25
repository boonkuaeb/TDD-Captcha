<?php
#require_once('./Random.php');
#require_once('./Captcha.php');

class CaptchaService
{
    private $random;

    public function __construct()
    {
        $this->random = new Random() ;
    }

    public function setRandom($random){
        $this->random = $random;
    }

    public function getCaptcha()
    {
        //$random = new Random();
        $random_pattern      = $this->random->getPattern();
        $random_leftOperand  = $this->random->getOperand();
        $random_operator     = $this->random->getOperator();
        $random_rightOperand = $this->random->getOperand();

        $captcha  = new Captcha($random_pattern,$random_leftOperand,$random_operator,$random_rightOperand);
        return $captcha->toString();
    }
}
