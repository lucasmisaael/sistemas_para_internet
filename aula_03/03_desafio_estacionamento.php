<?php

// DESAFIO 3 — SISTEMA DE ESTACIONAMENTO
// Tipos:
// moto = R$ 5/h
// carro = R$ 8/h
// suv = R$ 12/h
// Mais de 8 horas: 10% de desconto.
// Horas <= 0: inválidas.
// Tipo diferente dos três: inválido.

$numeroAtendimento = rand(1000, 9999);
$data = date("d/m/Y");

$cliente = readline("Cliente: ");
$placa = readline("Placa: ");
$tipoVeiculo = readline("Tipo [moto/carro/suv]: ");
$horas = (float) readline("Horas estacionadas: ");

// TODO: valide as horas.
// TODO: descubra o valor por hora com if / elseif / else.
// TODO: trate tipo inválido.
// TODO: calcule subtotal, desconto e total.
// TODO: exiba número, data e comprovante formatado.
