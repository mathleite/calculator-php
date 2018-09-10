<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/10/18
 * Time: 8:46 AM
 */

namespace App\mathleite;
use App\mathleite\show\operation\OperationInterface;


class Operation
{
	public function operation(OperationInterface $operation)
	{
		$execute = $operation->doOperation();
		return $execute;
	}
}