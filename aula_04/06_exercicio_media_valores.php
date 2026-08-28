<?php

// Exibe uma orientação para o usuário.
echo "Digite números positivos. Digite 0 para finalizar." . PHP_EOL;

// Inicializa o valor lido com um número diferente de zero.
$numero = -1;

// Cria o acumulador da soma dos valores.
$soma = 0;

// Cria o contador da quantidade de valores válidos.
$quantidade = 0;

// Enquanto o usuário não digitar zero, continua solicitando valores.
while ($numero != 0) {

    // Solicita um novo número.
    $numero = (float) readline("Informe um número: ");

    // Verifica se o número é diferente de zero.
    if ($numero != 0) {

        // Soma o número ao acumulador.
        $soma = $soma + $numero;

        // Incrementa a quantidade de valores informados.
        $quantidade++;
    }
}

// Verifica se pelo menos um número válido foi informado.
if ($quantidade > 0) {

    // Calcula a média.
    $media = $soma / $quantidade;

    // Exibe a quantidade de números.
    echo "Quantidade de valores: {$quantidade}" . PHP_EOL;

    // Exibe a soma.
    echo "Soma: " . number_format($soma, 2, ",", ".") . PHP_EOL;

    // Exibe a média.
    echo "Média: " . number_format($media, 2, ",", ".") . PHP_EOL;

} else {

    // Informa que nenhum valor foi digitado.
    echo "Nenhum valor válido foi informado." . PHP_EOL;
}
