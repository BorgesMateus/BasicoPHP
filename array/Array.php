<?php

/*
1. Arrays são matrizes ou vetores, também é considerado um dado do tipo composto.
2. Syntaxe do Array
2.1 Array();
2.2 $variavel = []
2.3 $variavel[] = 'valor inserido'
3. Debugando / Verificando Arrays
4. Indice do array começa em 0
5. Array associativo
*/

$lista = ['Coro', 22, 'Brasilia', 'Solteiro'];
$lista2 = Array('Coro', 22, 'Brasilia', 'Solteiro');
$lista[] = true;

$arrayAssoc = [
    'Nome' => 'Coro Seco',
    'Idade' => 22,
    'Estado Civil' => 'Solteiro',
    'Cidade' => 'Brasilia'
];

var_dump($lista, $arrayAssoc);