<?php

// Inicializa as variáveis.
$produto = "";
$preco = "";
$quantidade = "";
$total = null;

// Verifica se o formulário foi enviado utilizando POST.
if ($_SERVER["REQUEST_METHOD"] === "POST") {

    // Recebe o nome do produto.
    $produto = $_POST["produto"];

    // Recebe o preço.
    $preco = $_POST["preco"];

    // Recebe a quantidade.
    $quantidade = $_POST["quantidade"];

    // Converte os valores para números.
    $precoNumero = (float) $preco;
    $quantidadeNumero = (int) $quantidade;

    // Valida os dados.
    if ($precoNumero > 0 && $quantidadeNumero > 0) {

        // Calcula o total.
        $total = $precoNumero * $quantidadeNumero;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Exemplo POST</title>

</head>

<body>

    <h1>Calculadora de Compra</h1>

    <form method="POST">

        <label>Produto:</label>

        <input
            type="text"
            name="produto"
            value="<?= $produto ?>"
        >

        <br><br>

        <label>Preço:</label>

        <input
            type="number"
            step="0.01"
            name="preco"
            value="<?= $preco ?>"
        >

        <br><br>

        <label>Quantidade:</label>

        <input
            type="number"
            name="quantidade"
            value="<?= $quantidade ?>"
        >

        <br><br>

        <button type="submit">
            Calcular
        </button>

    </form>

    <?php

    // Verifica se o cálculo foi realizado.
    if ($total !== null) {

        echo "<h2>Resultado</h2>";

        echo "Produto: {$produto}<br>";

        echo "Total: R$ "
            . number_format($total, 2, ",", ".");

    }

    ?>

</body>

</html>