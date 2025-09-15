
<?php
     $arq = fopen("alunos.txt","r") or die("Erro ao abrir o arquivo");
     echo" <table border='1' cellpadding='5'>";  
     $PrimeiraLinha= true;
    while(!feof($arq)){
        $linha=fgets($arq);
        if($linha !=""){
            if($PrimeiraLinha){
                $PrimeiraLinha = false;
                continue;
            }
            $coluna = explode(";",$linha);
            echo"<tr>";
                foreach($coluna as $aluno){
                    echo"<td>$aluno</td>";
                }
        }
    }
    fclose($arq);
   
 ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exibir.php</title>
</head>
<body>
    <form action="index.html" method="post">
        <button type="submit">Voltar</button>
    </form>
</body>
</html>