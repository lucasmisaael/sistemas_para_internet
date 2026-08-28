<?php

// DESAFIO 2 — SITUAÇÃO ACADÊMICA
// Receba nome, duas notas e frequência.
// Regras:
// notas entre 0 e 10
// frequência entre 0 e 100
// frequência < 75: REPROVADO POR FREQUÊNCIA
// média >= 7: APROVADO
// média >= 4: RECUPERAÇÃO
// média < 4: REPROVADO POR NOTA

$aluno = readline("Nome do aluno: ");
$nota1 = (float) readline("Nota 1: ");
$nota2 = (float) readline("Nota 2: ");
$frequencia = (float) readline("Frequência (%): ");

// TODO: valide notas usando && ou ||.
// TODO: valide a frequência.
// TODO: calcule a média somente se os dados forem válidos.
// TODO: defina a situação com if / elseif / else.
// TODO: use number_format() na média.
