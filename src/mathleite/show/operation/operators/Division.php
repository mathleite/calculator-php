<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/6/18
 * Time: 10:16 AM
 */

namespace App\mathleite\show\operation\operators;
use App\mathleite\show\operation\AbstractOperator;

class Division extends AbstractOperator
{
	private $arrayNumber;
	public function __construct(float ...$arrayNumber)
	{
		$this->arrayNumber = $arrayNumber;
	}

	public function doOperation(): ?float
	{
		if(in_array(0, $this->arrayNumber)) {
			return null;
		} else {
			$number = array_shift($this->arrayNumber);
			foreach ($this->arrayNumber as $value) {
				$number /= $value;
			}
			return $number;
		}
	}
}