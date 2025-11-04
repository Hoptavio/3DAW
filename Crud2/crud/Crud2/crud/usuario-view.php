<?php
session_start();
require 'conexao.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Adcionar Visualizar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <?php include('navbar.php');?>
         <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header"> 
                            <h4>Visualizar usuário
                                <a href="index.php" class="btn btn-danger float-end">Voltar</a>
                            </h4>
                        </div>
                        <div class="card-body">
                            <?php 
                                if(isset($_GET['matricula'])){
                                    $aluno_matricula = mysqli_real_escape_string($conexao,$_GET['matricula']);
                                    $sql = "SELECT * FROM alunos WHERE matricula='$aluno_matricula' ";
                                    $querry = mysqli_query($conexao,$sql);
                                    if(mysqli_num_rows($querry)>0){
                                        $aluno = mysqli_fetch_array($querry);
                            ?>
                                    <div class="mb-3">
                                        <label>Matricula</label>
                                        <p class="form-control">
                                            <?=$aluno['matricula']?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Nome</label>
                                        <p class="form-control">
                                            <?=$aluno['nome']?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                        <label>Email</label>
                                        <p class="form-control">
                                            <?=$aluno['email']?>
                                        </p>
                                    </div>
                                    <div class="mb-3">
                                    </div>
                                <?php
                                }else{
                                    echo "<h5>Usuário não encontrado<h5>";
                                }
                            }
                                ?>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>