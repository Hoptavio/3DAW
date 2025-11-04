<?php
    session_start();
    require'conexao.php';
    if(isset($_POST['create-usuario'])){
        $matricula = mysqli_real_escape_string($conexao,trim($_POST['matricula']));
        $nome = mysqli_real_escape_string($conexao,trim($_POST['nome']));
        $email = mysqli_real_escape_string($conexao,trim($_POST['email']));
        $sql = "INSERT INTO alunos (matricula, nome, email) VALUES ('$matricula', '$nome', '$email')";
        mysqli_query($conexao,$sql);
        

        if(mysqli_affected_rows($conexao)>0){
            $_SESSION['mensagem']= 'Usuário criado com sucesso';
            header('Location: index.php');
            exit;
        }else{
            $_SESSION['mensagem']= 'Usuário não criado';
             header('Location: index.php');
            exit;
        }
    }

     if(isset($_POST['update-usuario'])){
        $aluno_matricula = mysqli_real_escape_string($conexao,$_POST['matricula']);

        $matricula = mysqli_real_escape_string($conexao,trim($_POST['matricula']));
        $nome = mysqli_real_escape_string($conexao,trim($_POST['nome']));
        $email = mysqli_real_escape_string($conexao,trim($_POST['email']));
        
        $sql = "UPDATE alunos SET matricula='$matricula', nome='$nome', email='$email' WHERE matricula='$aluno_matricula'";

        mysqli_query($conexao,$sql);
        

        if(mysqli_affected_rows($conexao)>0){
            $_SESSION['mensagem']= 'Usuário alterado';
            header('Location: index.php');
            exit;
        }else{
            $_SESSION['mensagem']= 'Usuário não alterado';
             header('Location: index.php');
            exit;
        }
    }

    if(isset($_POST['delete-usuario'])){
        $aluno_matricula = mysqli_real_escape_string($conexao,$_POST['delete-usuario']);
        $sql = "DELETE FROM alunos WHERE matricula = '$aluno_matricula'";
        mysqli_query($conexao,$sql);
        if(mysqli_affected_rows($conexao)>0){
            $_SESSION['message']= 'Usuário deletado com sucesso';
            header('Location: index.php');
            exit;
        }else{
              $_SESSION['message']= 'Usuário não deletado';
            header('Location: index.php');
            exit;
        }
    }
?>