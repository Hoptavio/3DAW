<?php
  if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST["matricula"]) && isset($_POST["nome"]) && isset($_POST["email"])) {
        $matricula = $_POST["matricula"];
        $nome = $_POST["nome"];
        $email = $_POST["email"];
        
        if(empty($matricula) || empty($nome) || empty($email)) {
            $msg = "Todos os campos são obrigatórios!";
        } else {
            if(!file_exists("alunos.txt")){
                $arq = fopen("alunos.txt","w") or die("Erro na criação de arquivo");
                $linha = "matricula;nome;email";
                fwrite($arq,$linha);
                fclose($arq);
            }
            $arq = fopen("alunos.txt","a") or die("Erro na abertura de arquivo");
            $linha = $matricula.";".$nome.";".$email."\n";
            fwrite($arq,$linha);
            fclose($arq); 
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir.php</title>
</head>
<body>
   <h2>Cadastrar aluno</h2>
    <form action="" method="post">
        <p>Matricula: </p>
        <input type="text" name="matricula" id="matricula" required>
        <br>
        <p>Nome: </p>
        <input type="text" name="nome" id="nome" required>
        <br>
        <p>Email: </p>
        <input type="email" name="email" id="email" required>
        <br><br>
        <input type="submit" value="Cadastrar Aluno">
    </form>
    <br>
    <form action="index.html" method="get">
        <button type="submit">Voltar</button>
    </form>
</body>
</html>