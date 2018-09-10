<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/10/18
 * Time: 1:58 PM
 */

namespace Test\operator;

use App\mathleite\Operation;
use App\mathleite\show\operation\operators\Subtraction;
use PHPUnit\Framework\TestCase;

class SubtractionTest extends TestCase
{
	public function testSubtraction()
	{
		$operator = new Operation();
		$subtraction = new Subtraction(4, 2);
		$result = $operator->operation($subtraction);

		$this->assertEquals(2, $result);
	}
}