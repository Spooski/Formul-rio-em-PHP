<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $matricula = $_POST['matricula'];
    $nota1 = floatval($_POST['nota1']);
    $nota2 = floatval($_POST['nota2']);

    $media = ($nota1 + $nota2) / 2;

    if ($media >= 7) {
        $status = "Aprovado";
    } elseif ($media >= 4 && $media < 7) {
        $status = "Prova Final";
    } else {
        $status = "Reprovado";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado do Aluno</h2>
    <p><strong>Nome:</strong> <?= htmlspecialchars($nome) ?></p>
    <p><strong>Matrícula:</strong> <?= htmlspecialchars($matricula) ?></p>
    <p><strong>Média:</strong> <?= number_format($media, 1, ',', '.') ?></p>
    <p><strong>Status:</strong> <?= $status ?></p>

    <a href="formulario.html">Voltar ao formulário</a>
</body>
</html>
