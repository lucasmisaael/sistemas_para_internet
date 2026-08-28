<?php

// Gera um código aleatório para identificar a compra.
$codigoCompra = rand(1000, 9999);

// Obtém a data atual do sistema.
$dataCompra = date("d/m/Y");

// Solicita o nome do cliente.
$cliente = readline("Informe o nome do cliente: ");

// Inicializa o total da compra.
$totalCompra = 0;

// Inicializa a quantidade total de itens comprados.
$totalItens = 0;

// Inicializa a quantidade de produtos diferentes cadastrados.
$quantidadeProdutos = 0;

// Inicializa o nome do produto mais caro como texto vazio.
$produtoMaisCaro = "";

// Inicializa o preço do produto mais caro com zero.
$precoMaisCaro = 0;

// Inicializa o nome do produto mais barato como texto vazio.
$produtoMaisBarato = "";

// Inicializa o preço do produto mais barato com zero.
$precoMaisBarato = 0;

// Define que inicialmente o usuário deseja cadastrar um produto.
$continuar = "s";

// Enquanto a resposta for exatamente "s", continua cadastrando produtos.
while ($continuar === "s") {

    // Solicita o nome do produto.
    $produto = readline("Informe o nome do produto: ");

    // Solicita o preço unitário.
    $preco = (float) readline("Informe o preço unitário: R$ ");

    // Solicita a quantidade do produto.
    $quantidade = (int) readline("Informe a quantidade: ");

    // Valida se preço e quantidade são maiores que zero.
    if ($preco <= 0 || $quantidade <= 0) {

        // Exibe uma mensagem de erro.
        echo "Preço e quantidade devem ser maiores que zero." . PHP_EOL;

    } else {

        // Calcula o subtotal do produto.
        $subtotalProduto = $preco * $quantidade;

        // Soma o subtotal ao total da compra.
        $totalCompra = $totalCompra + $subtotalProduto;

        // Soma a quantidade comprada ao total de itens.
        $totalItens = $totalItens + $quantidade;

        // Incrementa a quantidade de produtos cadastrados.
        $quantidadeProdutos++;

        // Verifica se este é o primeiro produto ou se ele é mais caro que o atual.
        if ($quantidadeProdutos === 1 || $preco > $precoMaisCaro) {

            // Atualiza o preço do produto mais caro.
            $precoMaisCaro = $preco;

            // Atualiza o nome do produto mais caro.
            $produtoMaisCaro = $produto;
        }

        // Verifica se este é o primeiro produto ou se ele é mais barato que o atual.
        if ($quantidadeProdutos === 1 || $preco < $precoMaisBarato) {

            // Atualiza o preço do produto mais barato.
            $precoMaisBarato = $preco;

            // Atualiza o nome do produto mais barato.
            $produtoMaisBarato = $produto;
        }

        // Exibe o subtotal do produto atual.
        echo "Subtotal de {$produto}: R$ "
            . number_format($subtotalProduto, 2, ",", ".")
            . PHP_EOL;
    }

    // Pergunta se o usuário deseja cadastrar outro produto.
    $continuar = readline("Deseja adicionar outro produto? [s/n]: ");

    // Exibe uma linha em branco.
    echo PHP_EOL;
}

// Verifica se pelo menos um produto válido foi cadastrado.
if ($quantidadeProdutos > 0) {

    // Inicializa o percentual de desconto com zero.
    $percentualDesconto = 0;

    // Aplica 10% para compras acima de R$ 500.
    if ($totalCompra > 500) {

        // Define desconto de 10%.
        $percentualDesconto = 10;

    // Aplica 5% para compras acima de R$ 300.
    } elseif ($totalCompra > 300) {

        // Define desconto de 5%.
        $percentualDesconto = 5;
    }

    // Solicita a forma de pagamento.
    $formaPagamento = readline("Forma de pagamento [pix/cartao/dinheiro]: ");

    // Verifica com comparação estrita se o pagamento é PIX.
    if ($formaPagamento === "pix") {

        // Acrescenta 2 pontos percentuais ao desconto.
        $percentualDesconto = $percentualDesconto + 2;
    }

    // Calcula o valor monetário do desconto.
    $valorDesconto = $totalCompra * ($percentualDesconto / 100);

    // Calcula o valor final da compra.
    $valorFinal = $totalCompra - $valorDesconto;

    // Exibe uma linha em branco.
    echo PHP_EOL;

    // Exibe o cabeçalho do comprovante.
    echo "==========================================" . PHP_EOL;
    echo "        COMPROVANTE DO SUPERMERCADO" . PHP_EOL;
    echo "==========================================" . PHP_EOL;

    // Exibe o código da compra.
    echo "Código da compra: {$codigoCompra}" . PHP_EOL;

    // Exibe a data.
    echo "Data: {$dataCompra}" . PHP_EOL;

    // Exibe o nome do cliente.
    echo "Cliente: {$cliente}" . PHP_EOL;

    // Exibe a quantidade de produtos diferentes.
    echo "Produtos cadastrados: {$quantidadeProdutos}" . PHP_EOL;

    // Exibe a quantidade total de itens.
    echo "Total de itens: {$totalItens}" . PHP_EOL;

    // Exibe o produto mais caro.
    echo "Produto mais caro: {$produtoMaisCaro} - R$ "
        . number_format($precoMaisCaro, 2, ",", ".")
        . PHP_EOL;

    // Exibe o produto mais barato.
    echo "Produto mais barato: {$produtoMaisBarato} - R$ "
        . number_format($precoMaisBarato, 2, ",", ".")
        . PHP_EOL;

    // Exibe o subtotal da compra.
    echo "Subtotal: R$ "
        . number_format($totalCompra, 2, ",", ".")
        . PHP_EOL;

    // Exibe o percentual de desconto.
    echo "Desconto: {$percentualDesconto}%" . PHP_EOL;

    // Exibe o valor do desconto.
    echo "Valor do desconto: R$ "
        . number_format($valorDesconto, 2, ",", ".")
        . PHP_EOL;

    // Exibe a forma de pagamento.
    echo "Forma de pagamento: {$formaPagamento}" . PHP_EOL;

    // Exibe o valor final.
    echo "TOTAL FINAL: R$ "
        . number_format($valorFinal, 2, ",", ".")
        . PHP_EOL;

    // Exibe o rodapé.
    echo "==========================================" . PHP_EOL;

} else {

    // Informa que nenhum produto válido foi cadastrado.
    echo "Nenhum produto válido foi cadastrado." . PHP_EOL;
}
