<?php

class Adder implements OperatorInterface
{
	public function run($number, $result)
	{
		return $result + $number;
	}
}