<?php
#require_once('./Range.php');
class RangeTest extends PHPUnit_Framework_TestCase
{

    public function testInput_LeftOpen_Return_True_getResult()
    {
        $range = new Range('[0,5]');
        $this->assertEquals('{0,1,2,3,4,5}',$range->getResult());
    }

    public function testInput_RightOpen_Return_True_getResult()
    {
        $range = new Range('(0,5]');
        $this->assertEquals('{1,2,3,4,5}',$range->getResult());
    }

    public function testSame_ShouldReturn_0_getLeftStart()
    {
        $range = new Range('[0,5]');
        $this->assertEquals('0',$range->getLeftStart());

    }

    public function testSame_ShouldReturn_1_getLeftStart()
    {
        $range = new Range('(0,5]');
        $this->assertEquals('1',$range->getLeftStart());

    }


    public function testSame_ShouldReturn_5_getRightStart()
    {
        $range = new Range('[0,5]');
        $this->assertEquals('5',$range->getRightStart());

    }

    public function testSame_ShouldReturn_4_getRightStart()
    {
        $range = new Range('(0,5)');
        $this->assertEquals('4',$range->getRightStart());

    }
}