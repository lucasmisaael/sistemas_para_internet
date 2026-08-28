<?php

// DESAFIO 5 — SISTEMA DE PEDIDO DELIVERY
// Frete:
// até 3 km: R$ 5
// > 3 e <= 8 km: R$ 10
// > 8 km: R$ 18
//
// Desconto:
// subtotal >= 200: 10%
// subtotal >= 100: 5%
// abaixo de 100: 0%
//
// Se pagamento for exatamente "pix", acrescente 2% de desconto.
//
// Valide:
// valor unitário > 0
// quantidade > 0
// distância >= 0

$codigoPedido = rand(1000, 9999);
$dataPedido = date("d/m/Y");

$cliente = readline("Cliente: ");
$produto = readline("Produto: ");
$valorUnitario = (float) readline("Valor unitário: R$ ");
$quantidade = (int) readline("Quantidade: ");
$formaPagamento = readline("Pagamento [pix/cartao/dinheiro]: ");
$distancia = (float) readline("Distância da entrega (km): ");

// TODO: valide os dados.
// TODO: calcule o subtotal.
// TODO: calcule o frete.
// TODO: calcule o desconto.
// TODO: use === para verificar "pix".
// TODO: calcule o total final.
// TODO: exiba o comprovante com number_format() e PHP_EOL.
