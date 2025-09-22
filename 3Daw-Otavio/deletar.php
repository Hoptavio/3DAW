<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['matricula'])) {
    $matriculaDeletar = $_POST['matricula'];
    
    if (file_exists("alunos.txt")) {
        $arq = fopen("alunos.txt", "r");
        $novoConteudo = "";
        $primeiraLinha = true;
        
        while (!feof($arq)) {
            $linha = fgets($arq);
            if ($linha != "") {
                if ($primeiraLinha) {
                    $primeiraLinha = false;
                    $novoConteudo .= $linha;
                    continue;
                }
                
                $coluna = explode(";", $linha);
                if ($coluna[0] != $matriculaDeletar) {
                    $novoConteudo .= $linha;
                }
            }
        }
        fclose($arq);
        
        // Reescreve o arquivo sem o aluno deletado
        $arq = fopen("alunos.txt", "w");
        fwrite($arq, $novoConteudo);
        fclose($arq);
        
        $msg = "Aluno deletado com sucesso!";
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deletar Aluno</title>
</head>
<body>
    <h2>Deletar Aluno</h2>
    
    <?php if (isset($msg)) echo "<p>$msg</p>"; ?>
    
    <form action="" method="post">
        <p>Matrícula do aluno a ser deletado: </p>
        <input type="text" name="matricula" id="matricula" required>
        <br><br>
        <input type="submit" value="Deletar Aluno">
    </form>
    
    <br>
    <form action="index.html" method="get">
        <button type="submit">Voltar</button>
    </form>
</body>
</html>