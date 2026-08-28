<?php

// DESAFIO 4 — SIMULADOR DE EMPRÉSTIMO
// Dados: cliente, salário, valor solicitado e parcelas.
// Regras:
// salário > 0
// valor solicitado > 0
// parcelas > 0
// parcela não pode ultrapassar 30% do salário.

$codigoSimulacao = rand(1000, 9999);

$cliente = readline("Nome do cliente: ");
$salario = (float) readline("Salário mensal: R$ ");
$valorEmprestimo = (float) readline("Valor solicitado: R$ ");
$parcelas = (int) readline("Quantidade de parcelas: ");

// TODO: valide antes de dividir.
// TODO: calcule o valor da parcela.
// TODO: calcule 30% do salário.
// TODO: informe PRÉ-APROVADO ou NÃO APROVADO.
// TODO: formate valores com number_format().
