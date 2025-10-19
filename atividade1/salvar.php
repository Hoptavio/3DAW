<?php
$codigo = $_POST['codigo'];
$pergunta = $_POST['pergunta'];
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
$stmt = $pdo->prepare("UPDATE perguntas SET pergunta = ? WHERE codigo = ?");
$ok = $stmt->execute([$pergunta, $codigo]);

header('Content-Type: application/json');
echo json_encode(['ok' => $ok]);
?>
