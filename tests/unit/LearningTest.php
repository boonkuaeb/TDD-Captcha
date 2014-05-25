<?php

class LearningTest extends PHPUnit_Framework_TestCase
{
    public function testCheckStrLeft()
    {
        $this->assertEquals('[',substr('[0,5]',0,1));
    }

    public function testCheckStrRight()
    {
        $this->assertEquals('5',substr('[0,5)',-2,1));
    }
}