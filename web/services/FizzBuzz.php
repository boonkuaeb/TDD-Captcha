<?php 
class FizzBuzz 
{
	public function getResult($input)
	{
		$output = '';
		if($input % 15 == 0)
		{
			$output = 'FizzBuzz';
		}
		else if(($input % 3) == 0)
		{
			$output = 'Fizz';
		}
		else if(($input % 5) == 0)
		{
			$output = 'Buzz';
		}
		else 
		{
			$output = $input;
		}
		return $output;
	}
}
