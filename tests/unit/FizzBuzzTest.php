<?php 

#require_once('FizzBuzz.php');

class FizzBuzzTest extends PHPUnit_Framework_TestCase
{
	public function testInput_1_Result_1()
	{
		$fizz_buzz = new FizzBuzz();
        $this->assertEquals(1, $fizz_buzz->getResult(1));
	}

	public function testInput_2_Result_2()
	{
		$fizz_buzz = new FizzBuzz();
        $this->assertEquals(2, $fizz_buzz->getResult(2));
	}

	public function testInput_3_Result_Fizz()
	{
		$fizz_buzz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizz_buzz->getResult(3));
	}

	public function testInput_4_Result_4()
	{
		$fizz_buzz = new FizzBuzz();
        $this->assertEquals(4, $fizz_buzz->getResult(4));
	}

	public function testInput_5_Result_Buzz()
	{
		$fizz_buzz = new FizzBuzz();
        $this->assertEquals('Buzz', $fizz_buzz->getResult(5));
	}	

	public function testInput_6_Result_Fizz()
	{
		$fizz_buzz = new FizzBuzz();
        $this->assertEquals('Fizz', $fizz_buzz->getResult(6));
	}	

	public function testInput_7_Result_7()
	{
		$fizz_buzz = new FizzBuzz();
        $this->assertEquals(7, $fizz_buzz->getResult(7));
	}

	public function testInput_15_Result_FizzBuzz()
	{
		$fizz_buzz = new FizzBuzz();
        $this->assertEquals('FizzBuzz', $fizz_buzz->getResult(15));
	}

	public function testInput_30_Result_FizzBuzz()
	{
		$fizz_buzz = new FizzBuzz();
        $this->assertEquals('FizzBuzz', $fizz_buzz->getResult(30));
	}

}