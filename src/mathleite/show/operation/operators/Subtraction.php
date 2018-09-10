<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/6/18
 * Time: 10:10 AM
 */

namespace App\mathleite\show\operation\operators;
use App\mathleite\show\operation\AbstractOperation;

class Subtraction extends AbstractOperation
{
	private $arrayNumber;
	public function __construct(float ...$arrayNumber)
	{
		$this->arrayNumber = $arrayNumber;
	}

	public function execute(): float
	{
		$number = array_shift($this->arrayNumber);
		foreach ($this->arrayNumber as $value) {
			$number -= $value;
		}
		return $number;
	}
}