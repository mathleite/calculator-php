<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/10/18
 * Time: 4:36 PM
 */

namespace Test\operator;


use App\mathleite\Operation;
use App\mathleite\show\operation\operators\Multiplication;
use PHPUnit\Framework\TestCase;

class MultiplicationTest extends TestCase
{

	public function testMultiplication()
	{
		$operator = new Operation();
		$multiplication = new Multiplication(2, 8);
		$result = $operator->operation($multiplication);

		$this->assertEquals(16, $result);
	}
}