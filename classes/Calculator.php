<?php

class Calculator implements JsonSerializable
{
	protected $result;

	protected $operation;

	public function __toString()
	{
		return $this->getResult();
	}

	public function setOperation(OperatorInterface $operation)
	{
		$this->operation = $operation;
	}

	public function calculate()
	{
		foreach(func_get_args() as $number)
		{
			$this->result = $this->operation->run($number, $this->result);
		}
	}

	public function getResult()
	{
		return $this->jsonSerialize();
	}

	public function jsonSerialize()
	{
		return json_encode($this->result);
	}
}