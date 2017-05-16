<?php

class Multiplier implements OperatorInterface
{	
	public function run($number, $result)
	{
		return $number * $result;
	}
}