<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/5/18
 * Time: 10:45 AM
 */
require_once  __DIR__ . '/../vendor/autoload.php';

$doOperation = new \App\mathleite\DoOperation();

$sum = new \App\mathleite\show\operation\operators\Sum(5.064, 1);
$resultSum = $doOperation->doOperation($sum);

$subtraction = new \App\mathleite\show\operation\operators\Subtraction(10, 4, 2);
$resultSubtraction = $doOperation->doOperation($subtraction);


$division = new \App\mathleite\show\operation\operators\Division(87.15, 2, 0);
$resultDivision = $doOperation->doOperation($division);

$multiplication = new \App\mathleite\show\operation\operators\Multiplication(2.4, 2, 2, 2 );
$resultMultiplication = $doOperation->doOperation($multiplication);

$showOperations = new \App\mathleite\show\ShowOperation($resultSum, $resultSubtraction, $resultDivision, $resultMultiplication);

