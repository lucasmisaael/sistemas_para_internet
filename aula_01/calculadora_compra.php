<?php


echo "===========================================" . PHP_EOL;
echo "          Calculadora de Compras            " .PHP_EOL;
echo "===========================================" . PHP_EOL;


/*
    Variaveis:
        Nome do Cliente
        produto
        valor unitario
        quantidade 
        percentual de Desconto
        Frete
        Parcelas
    Calculos
        subtotal = valor unitario * quantidade
        Total com Desconto = subtotal - valor desconto 
        Total Final = total com Desconto + Frete
        Valor de Parcelas = total Final / parcelas
*/

//Nome do Cliente
$nomeCliente = readline("Informe o nome do Cliente: ");

//Nome do Produto
$nomeProduto = readline("Informe o nome do Produto: ");

//Valor Unitario
$valorUnitario = (float) readline("Informe o valor Unitário do Produto: R$ ");

//quantidade de produtos
$quantidade = (int) readline("Informe a quantidade: ");

//Percentual de Desconto 
$percentualDesconto = (float) readline("Informe o Percentual de Desconto: (1-100) ");

//Frete
$frete = (float) readline("Informe o valor do frete: R$ ");

//Parcelas
$parcelas = (int) readline("Informe a quantidade de Parcelas: (1-12) ");

//======================
//        Calculos
//======================


//Calculo de subtotal
$subtotal = $valorUnitario * $quantidade;

//Calculo do valor do Desconto
$valorDesconto = $subtotal * ($percentualDesconto/100);

//Calculo de total com Desconto 
$totalComDesconto = $subtotal - $valorDesconto;

//Calculo total com Desconto + Frete
$totalFinal = $totalComDesconto + $frete;

//Calculo de valor de Parcelas 
$valorParcela = $totalFinal / $parcelas;

//Codigo do Pedido 
$codigoPedido = rand(1000, 9999);

//Data de compra 
$dataCompra = date("d/m/Y");

echo PHP_EOL;

echo "===========================================" . PHP_EOL;
echo "          RESUMO DE COMPRA                 " .PHP_EOL;
echo "===========================================" . PHP_EOL;

echo "Codigo do Pedido    : {$codigoPedido}". PHP_EOL;
echo "Data do Pedido      : {$dataCompra}". PHP_EOL;
echo "Nome do Cliente     : {$nomeCliente}". PHP_EOL;
echo "Nome do Produto     : {$nomeProduto}". PHP_EOL;
echo "Quantidade          : {$quantidade}". PHP_EOL;

echo "Valor Unitário      : ".number_format($valorUnitario, 2, ",", "."). PHP_EOL;
echo "Subtotal            : ".number_format($subtotal, 2, ",", "."). PHP_EOL;
echo "Percentual desconto : {$quantidade}". PHP_EOL;
echo "Valor do Desconto   : ".number_format($valorDesconto, 2, ",", "."). PHP_EOL;
echo "Valor do Frete      : ".number_format($frete, 2, ",", "."). PHP_EOL;
echo "Total Final         : ".number_format($totalFinal, 2, ",", "."). PHP_EOL;
echo "Quantidade Parcelas : {$parcelas}". PHP_EOL;
echo "Valor da Parcela    : ".number_format($valorParcela, 2, ",", "."). PHP_EOL;
echo "==========================================================================" . PHP_EOL;