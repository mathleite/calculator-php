<?php
/**
 * Created by PhpStorm.
 * User: DB1\matheus.leite
 * Date: 9/5/18
 * Time: 10:45 AM
 */
require_once '../vendor/autoload.php';

$sum = new \App\mathleite\Operation\Sum(5.064, 1);
$resultSum = $sum->operation();

$subtraction = new \App\mathleite\Operation\Subtraction(10, 4, 2);
$resultSubtraction = $subtraction->operation();


$division = new \App\mathleite\Operation\Division(87.15, 3);
$resultDivision = $division->operation();

$multiplication = new \App\mathleite\Operation\Multiplication(2.4, 2, 2, 2 );
$resultMultiplication = $multiplication->operation();

$show = new \App\mathleite\ShowValues($resultSum, $resultSubtraction, $resultDivision, $resultMultiplication);

