<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/10/18
 * Time: 4:28 PM
 */

namespace Test\operator;


use App\mathleite\Operation;
use App\mathleite\show\operation\operators\Division;
use PHPUnit\Framework\TestCase;

class DivisibleTest extends TestCase
{
	public function testDivisible()
	{
		$operator = new Operation();
		$divisible = new Division(8, 2, 2, 0);
		$result = $operator->operation($divisible);

		$this->assertEquals(null, $result);
	}
}