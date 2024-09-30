<?php

/* Assim que comenta truta 

STRING = TEXTO (aspas duplas "" ou aspas simples '')
INTEIRO = NUMERO INTEIRO (apenas coloca o numero <- tem que ser inteiro)
FLOAT = NUMERO DECIMAL (apenas coloca o numero <- tem que usar o . ex: 3.55)
LOGICO = VERDADEIRO OU FALSO

*/

$nomeCompleto = "Joao Caixeta"; // <- String

$numero_inteiro = 21; // <- Integer

$numeroFracao = 1950.35; // <- Float

$verdade =  true; // <- Boolean

$mentira = false; // <- Boolean

$texto = "Ola, tudo bem? Seu nome e $nomeCompleto, e voce tem $numero_inteiro anos.";

echo $texto .PHP_EOL;
//var_dump($nomeCompleto,$numero_inteiro, $numeroFracao, $verdade, $mentira);