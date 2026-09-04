<?php

//solicita ao usuario quantas repetições deseja executar

$quantidade = (int) readline("Quantas vezes você deseja repetir? ");


/*
O for possui três partes:
    1. $i = 1 -> valor inicial do contador 
    2. $i <= $quantidade -> condição para continuar 
    3. $i++ -> incremento realizado no final de cada execução 
*/

for($i = 1; $i <= $quantidade; $i++){

echo " Repetição numero {$i}" . PHP_EOL;
}

echo "concluído";