<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/6/18
 * Time: 3:31 PM
 */
namespace App\mathleite\show\operation;

abstract class AbstractOperator implements OperationInterface
{
	abstract public function doOperation(): ?float;
}