<?php

/*

SOMA +
SUBTRACAO -
DIVISAO /
MULTIPLICACAO *
MODULO %
POTENCIACAO **

*/

$num1 = 10;
$num2 = 3;

$soma = $num1 + $num2;
$sub = $num1 - $num2;
$multi = $num1 * $num2;
$div = $num1 / $num2;

echo 'Operacoes basicas-------/---------/--------' . PHP_EOL;
echo $soma . PHP_EOL;
echo $sub . PHP_EOL;
echo $multi . PHP_EOL;
echo $div . PHP_EOL;

echo 'Operacoes complexas-------/---------/--------' . PHP_EOL;
$modulo = $num1 % $num2;
$potencia = $num1 ** $num2;

echo $modulo . PHP_EOL;
echo $potencia . PHP_EOL;