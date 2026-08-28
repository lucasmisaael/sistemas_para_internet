<?php

// Solicita ao usuário quantas repetições deseja executar.
$quantidade = (int) readline("Quantas vezes deseja repetir? ");

// O for possui três partes:
// 1. $i = 1 -> valor inicial do contador.
// 2. $i <= $quantidade -> condição para continuar.
// 3. $i++ -> incremento realizado ao final de cada repetição.
for ($i = 1; $i <= $quantidade; $i++) {

    // Exibe o número da repetição atual.
    echo "Repetição número {$i}" . PHP_EOL;
}

// Exibe uma mensagem ao final do laço.
echo "Repetições concluídas!" . PHP_EOL;
