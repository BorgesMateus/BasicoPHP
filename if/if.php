<?php

$nome = "Pedro";
$idade = 26;

//If condicao simples
// if(1 > 2) {
//     echo "Verdadeiro" . PHP_EOL;
// } else {
//     echo "Falso". PHP_EOL;
// }
//If aninhando ELSE IF
if($nome == "Lucas") {
    echo "Verdadeiro" . PHP_EOL;
} else if ($idade === 27) {
    echo "Idade OK" . PHP_EOL;
} else {
    echo "Nada feito". PHP_EOL;
}