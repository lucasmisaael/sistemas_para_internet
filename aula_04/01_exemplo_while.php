<?php

// Solicita ao usuário o número inicial da contagem.
$inicio = (int) readline("Informe o número inicial: ");

// Solicita ao usuário o número final da contagem.
$fim = (int) readline("Informe o número final: ");

// Cria o contador começando pelo número inicial.
$contador = $inicio;

// Enquanto o contador for menor ou igual ao número final, o bloco será repetido.
while ($contador <= $fim) {

    // Exibe o valor atual do contador.
    echo "Contador: {$contador}" . PHP_EOL;

    // Soma 1 ao contador para avançar para a próxima repetição.
    $contador++;
}

// Exibe uma mensagem quando o laço termina.
echo "Fim da contagem!" . PHP_EOL;
