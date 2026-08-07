<?php


echo "===========================================" . PHP_EOL;
echo "          Calculadora de Médias            " .PHP_EOL;
echo "===========================================" . PHP_EOL;

//Solicita o nome do Aluno e armazena o valor digitado
$nomeAluno = readline("Informe o Nome do Aluno: ");

$nota1 = (float) readline("Informe a 1° nota:  ");
$nota2 = (float) readline("Informe a 2° nota:  ");
$nota3 = (float) readline("Informe a 3° nota:  ");
$nota4 = (float) readline("Informe a 4° nota:  ");

//Variavel que soma as notas 
$somaNotas = $nota1 + $nota2 + $nota3 + $nota4;

//Variavel com media das notas
$mediaNotas = $somaNotas/4;

echo PHP_EOL;

echo "===========================================" . PHP_EOL;
echo "                 BOLETIM                   " .PHP_EOL;
echo "===========================================" . PHP_EOL;

echo "Nome do Aluno: {$nomeAluno}". PHP_EOL;

//Print das notas do aluno
echo "Nota 1: ".number_format($nota1, 1, ",", ".") . PHP_EOL;
echo "Nota 2: ".number_format($nota2, 1, ",", ".") . PHP_EOL;
echo "Nota 3: ".number_format($nota3, 1, ",", ".") . PHP_EOL;
echo "Nota 4: ".number_format($nota4, 1, ",", ".") . PHP_EOL;

//Soma das notas
echo "Soma das Notas:" .number_format($somaNotas, 1,",","."). PHP_EOL;
//Media Final
echo "Média das Notas:" .number_format($mediaNotas, 1,",","."). PHP_EOL;
echo "========================================================" . PHP_EOL;