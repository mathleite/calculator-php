<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/6/18
 * Time: 9:59 AM
 */

namespace App\mathleite;


class ShowValues
{
	private $sum;
	private $subtraction;
	private $division;
	private $multiplication;

	public function __construct($sum, $subtraction, $division,$multiplication)
	{
		$this->sum = $sum;
		$this->subtraction = $subtraction;
		$this->division = $division;
		$this->multiplication = $multiplication;

		$this->show();
	}

	public function show()
	{
		print 'Result of sum: ' . $this->sum . PHP_EOL;
		print 'Result of subtraction: ' . $this->subtraction . PHP_EOL;
		print 'Result of division: ' . $this->division . PHP_EOL;
		print 'Result of multiplication: ' . $this->multiplication . PHP_EOL;
	}
}