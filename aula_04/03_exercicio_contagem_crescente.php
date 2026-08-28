<?php

// Solicita ao usuário o número limite da contagem.
$numero = (int) readline("Informe um número: ");

// Valida se o número informado é maior que zero.
if ($numero <= 0) {

    // Exibe mensagem de erro caso o valor seja inválido.
    echo "O número deve ser maior que zero." . PHP_EOL;

} else {

    // Inicia o contador em 1.
    $contador = 1;

    // Repete enquanto o contador for menor ou igual ao número informado.
    while ($contador <= $numero) {

        // Exibe o valor atual.
        echo $contador . PHP_EOL;

        // Incrementa o contador em 1.
        $contador++;
    }
}
