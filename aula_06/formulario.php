<?php

// Verifica se o parâmetro "nome" foi enviado pela URL.
if (isset($_GET["nome"])) {

    // Recebe o valor enviado pelo formulário.
    $nome = $_GET["nome"];

} else {

    // Caso ainda não tenha sido enviado nada,
    // iniciamos a variável vazia.
    $nome = "";
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <title>Exemplo GET</title>

</head>

<body>

    <h1>Formulário com GET</h1>

    <form method="GET">

        <label for="nome">
            Nome:
        </label>

        <input
            type="text"
            id="nome"
            name="nome"
            value="<?= $nome ?>"
        >

        <button type="submit">
            Enviar
        </button>

    </form>

    <?php

    // Verifica se existe um nome informado.
    if ($nome != "") {

        // Exibe uma mensagem.
        echo "<h2>Olá, {$nome}!</h2>";
    }

    ?>

</body>

</html>