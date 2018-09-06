<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/6/18
 * Time: 10:16 AM
 */

namespace App\mathleite\Operation;


class Division
{
	private $arrayNumber;
	public function __construct(float ...$arrayNumber)
	{
		$this->arrayNumber = $arrayNumber;
	}

	public function operation()
	{
		if(in_array(0, $this->arrayNumber)) {
			return 'Error, division by 0';
		} else {
			$number = array_shift($this->arrayNumber);
			foreach ($this->arrayNumber as $value) {
				$number /= $value;
			}
			return $number;
		}
	}
}