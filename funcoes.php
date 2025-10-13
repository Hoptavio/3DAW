<?php
$arquivoP = 'perguntas.txt';
$perguntaB= isset($_POST['pergunta'])? trim($_POST['pergunta']):'';
if(empty($perguntaB)){
    die("Erro: Nenhuma pergunta encontrata");
}
if(!file_exists($arguivoP)){
        die("Erro: Arquivo não encontrado");
}
$conteudo = file_get_contents($arguivoP);
if($conteudo===false){
    die("Erro: não foi possivel ler o arquivo");
}
$perguntas= json_decode($conteudo,true);
if(json_last_error()!== JSON_ERROR_NONE){
    die("Erro: Formado Json inválido");
}
$resposta =null;
foreach($perguntas as $item){
    if(isset($item['pergunta'])&& isset($item['resposta'])){
        if(strtolower($item['pergunta']) === strtolower($perguntaB)){
            $resposta = $item['resposta'];
            break;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busca</title>
</head>
<body>
    <div class="container">
        <h1>Resultado da Busca</h1>
        
        <div class="pergunta">
            <strong>Sua pergunta:</strong> <?php echo htmlspecialchars($pergunta_buscada); ?>
        </div>

        <?php if ($resposta_encontrada): ?>
            <div class="resposta">
                <strong>Resposta encontrada:</strong> <?php echo htmlspecialchars($resposta_encontrada); ?>
            </div>
        <?php else: ?>
            <div class="nao-encontrada">
                <strong>Nenhuma resposta encontrada</strong> para a pergunta: "<?php echo htmlspecialchars($pergunta_buscada); ?>"
            </div>
        <?php endif; ?>

        <a href="javascript:history.back()" class="btn-voltar">Fazer outra pergunta</a>
    </div>
</body>
</html>