<?php

//for ($i = 0) <- variavel $i < 0; <- condicao $i++ <- acrescentar ao I
for ($i = 10; $i >= 1; $i = $i-2) { 
    echo $i . PHP_EOL;
}