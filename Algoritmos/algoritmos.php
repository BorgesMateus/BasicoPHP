<?php

// Primeiro Algoritmo <- Nome completo
$nome = "Coro";
$sobrenome = "Seco";
$nomeCompleto = $nome . ' ' . $sobrenome;

//echo $nomeCompleto . PHP_EOL; 

// Segundo Algoritmo <- Media
$nota1 = 10;
$nota2 = 10;
$nota3 = 8;
$nota4 = 8;
$media =($nota1 + $nota2 + $nota3 + $nota4)/4;

//echo $media . PHP_EOL;

// Terceiro Algoritmo <- Acumulo

$mensagem = "$nomeCompleto, voce conquistou a media de $media";

echo $mensagem . PHP_EOL;