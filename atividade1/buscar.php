<?php
$codigo = $_GET['codigo'];
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
$stmt = $pdo->prepare("SELECT pergunta FROM perguntas WHERE codigo = ?");
$stmt->execute([$codigo]);
$r = $stmt->fetch();

header('Content-Type: application/json');
echo json_encode(['pergunta' => $r['pergunta'] ?? '']);
?>
