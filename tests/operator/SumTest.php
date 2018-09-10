<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/10/18
 * Time: 11:37 AM
 */

namespace Test\operator;

use App\mathleite\Operation;
use App\mathleite\show\operation\operators\Sum;
use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
	public function testSum()
	{
		$operator = new Operation();
		$sum = new Sum(1, 5);
		$result = $operator->operation($sum);

		$this->assertEquals(6, $result);
	}
}