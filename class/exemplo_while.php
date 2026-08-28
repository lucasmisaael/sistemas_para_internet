<?php

// solicita ao usuario o numero inicial da contagem
$inicio = (int) readline("Informe o número inicial: ");

// solicita ao usuario o numero final da contagem
$fim = (int) readline("Informe o número final: ");

//Cria o contador começando pelo numero inicial 
$contador = $inicio;

//Enquanto o contador for menor ou igual ao numero final, o bloco será repetido 
while($contador <= $fim ){

    //Exibe o valor atual do contador 
    echo "Contador: {$contador}" . PHP_EOL;

    //contador ++;
    $contador = $contador +1;
}

echo "Fim da contagem :) ". PHP_EOL;