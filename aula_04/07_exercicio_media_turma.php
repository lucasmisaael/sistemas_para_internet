<?php

// Solicita a quantidade de alunos da turma.
$quantidadeAlunos = (int) readline("Informe a quantidade de alunos: ");

// Valida se a quantidade é maior que zero.
if ($quantidadeAlunos <= 0) {

    // Exibe mensagem de erro.
    echo "A quantidade de alunos deve ser maior que zero." . PHP_EOL;

} else {

    // Cria um acumulador para a soma das notas.
    $somaNotas = 0;

    // Cria um contador de alunos aprovados.
    $aprovados = 0;

    // Cria um contador de alunos reprovados.
    $reprovados = 0;

    // Inicializa a maior nota como zero.
    $maiorNota = 0;

    // Inicializa a menor nota como 10.
    $menorNota = 100;

    // Repete o processo para cada aluno.
    for ($i = 1; $i <= $quantidadeAlunos; $i++) {

        // Solicita o nome do aluno.
        $nome = readline("Nome do aluno {$i}: ");

        // Solicita a nota do aluno.
        $nota = (float) readline("Nota de {$nome}: ");

        // Soma a nota ao acumulador.
        $somaNotas = $somaNotas + $nota;

        // Verifica se a nota atual é maior que a maior nota registrada.
        if ($nota > $maiorNota) {

            // Atualiza a maior nota.
            $maiorNota = $nota;
        }

        // Verifica se a nota atual é menor que a menor nota registrada.
        if ($nota <= $menorNota) {

            // Atualiza a menor nota.
            $menorNota = $nota;
        }

        // Verifica se o aluno foi aprovado.
        if ($nota >= 70) {

            // Incrementa o contador de aprovados.
            $aprovados++;

        } else {

            // Incrementa o contador de reprovados.
            $reprovados++;
        }

        // Exibe uma linha em branco entre os alunos.
        echo PHP_EOL;
    }

    // Calcula a média da turma.
    $mediaTurma = $somaNotas / $quantidadeAlunos;

    // Exibe os resultados.
    echo "==============================" . PHP_EOL;
    echo "RESUMO DA TURMA" . PHP_EOL;
    echo "==============================" . PHP_EOL;

    // Exibe a média da turma.
    echo "Média da turma: " . number_format($mediaTurma, 2, ",", ".") . PHP_EOL;

    // Exibe a maior nota.
    echo "Maior nota: " . number_format($maiorNota, 2, ",", ".") . PHP_EOL;

    // Exibe a menor nota.
    echo "Menor nota: " . number_format($menorNota, 2, ",", ".") . PHP_EOL;

    // Exibe a quantidade de aprovados.
    echo "Aprovados: {$aprovados}" . PHP_EOL;

    // Exibe a quantidade de reprovados.
    echo "Reprovados: {$reprovados}" . PHP_EOL;
}
