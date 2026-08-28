<?php

// Solicita ao usuário o número final da soma.
$numero = (int) readline("Informe um número inteiro positivo: ");

// Valida se o número informado é maior que zero.
if ($numero <= 0) {

    // Exibe mensagem de erro.
    echo "O número deve ser maior que zero." . PHP_EOL;

} else {

    // Cria uma variável acumuladora iniciando em zero.
    $soma = 0;

    // Percorre todos os números de 1 até o número informado.
    for ($i = 1; $i <= $numero; $i++) {

        // Soma o valor atual de $i ao acumulador.
        $soma = $soma + $i;
    }

    // Exibe o resultado final da soma.
    echo "A soma de 1 até {$numero} é {$soma}." . PHP_EOL;
}
