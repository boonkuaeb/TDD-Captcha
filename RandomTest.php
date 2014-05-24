<?php
require_once('./Random.php');

class RandomTest extends PHPUnit_Framework_TestCase
{
    public function testgetGetPattern()
    {
        $random = new Random();
        $this->assertContains($random->getPattern(), array(1, 2));
    }

    public function testShouldReturn_1_to_9_On_LeftOperand()
    {
        $random = new Random();
        $this->assertContains($random->getOperand(), array(1, 2,3,4,5,6,7,8,9));
    }
}