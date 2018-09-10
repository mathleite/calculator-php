<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/5/18
 * Time: 10:45 AM
 */
require_once  __DIR__ . '/../vendor/autoload.php';

$doOperation = new \App\mathleite\Operation();

$sum = new \App\mathleite\show\operation\operators\Sum(5.064, 1);
$resultSum = $doOperation->operation($sum);

$subtraction = new \App\mathleite\show\operation\operators\Subtraction(10, 4, 2);
$resultSubtraction = $doOperation->operation($subtraction);


$division = new \App\mathleite\show\operation\operators\Division(87.15, 2, 0);
$resultDivision = $doOperation->operation($division);

$multiplication = new \App\mathleite\show\operation\operators\Multiplication(2.4, 2, 2, 2 );
$resultMultiplication = $doOperation->operation($multiplication);

$showOperations = new \App\mathleite\show\ShowOperation($resultSum, $resultSubtraction, $resultDivision, $resultMultiplication);

