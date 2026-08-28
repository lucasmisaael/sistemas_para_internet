<?php

// Solicita ao usuário o número que será usado na tabuada.
$numero = (int) readline("Informe um número para a tabuada: ");

// Repete o bloco 10 vezes, começando em 1 e terminando em 10.
for ($i = 1; $i <= 10; $i++) {

    // Calcula o resultado da multiplicação.
    $resultado = $numero * $i;

    // Exibe a operação e o resultado.
    echo "{$numero} x {$i} = {$resultado}" . PHP_EOL;
}
