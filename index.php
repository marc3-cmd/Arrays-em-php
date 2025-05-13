<?php
$alunos = [
    [
        "Nome" => "Raquel",
        "RM" => "72941583",
        "E-mail" => "quel03@email.com",
        "Notas" => [6.5, 8.5, 5.0]
    ],
    [
        "Nome" => "James",
        "RM" => "48613052",
        "E-mail" => "james777@email.com",
        "Notas" => [9.0, 7.5, 4.5]
    ],
    [
        "Nome" => "Daniel",
        "RM" => "39527064",
        "E-mail" => "Dan258@email.com",
        "Notas" => [6.0, 3.5, 5.0]
    ]
];

function CalcularTotalMedia($notas) {
    return round(array_sum($notas)/count($notas), 1);
}

foreach ($alunos as $aluno) {
    $notas = $aluno["Notas"];
    $media = CalcularTotalMedia($notas);
    $situacaofinal = ($media >= 6.0) ? 'Aprovado' : 'Reprovado';
    
    printf("Nome......: %s\n", $aluno['Nome']);
    printf("RM........: %s\n", $aluno['RM']);
    printf("Email.....: %s\n", $aluno['E-mail']);
    printf("Notas.....: %s\n", implode(' | ', $aluno['Notas']));
    printf("Média.....: %.1f\n", $media);
    printf("Situação..: %s\n", $situacaofinal);
    echo str_repeat("-", 30) . "\n";
}