<?php

$ArrayMulti = [
    //Primeiro array indices de 0-3
    ['Coro Seco', 'Kremoto Binboy', 'Rafa Rafoso'],
    //Segundo Array indices de 0-3
    ['22', '25', '20'],
    //Terceiro Array
    ['VP', 'Areal', 'Casa do Rafa']
];

$coro = 0;
$kremoto= 1;
$rafa = 2;

$nome = 0;
$idade = 1;
$casa = 2;

$pessoa = $rafa;

echo $ArrayMulti[$nome][$pessoa] . PHP_EOL;
echo $ArrayMulti[$idade][$pessoa] . PHP_EOL;
echo $ArrayMulti[$casa][$pessoa] . PHP_EOL;