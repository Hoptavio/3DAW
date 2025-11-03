<?php 
  require 'conexao.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuários</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>
  <body>
    <?php include('navbar.php');?>
    <div class="container mt-4">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <h4>Lista De Usuários
              <a href="usuario-create.php" class="btn btn-primary float-end">Adcionar Usuário</a>
            </h4>
            </div>
            <div class="card-body">
              <table class="table table-borded  table-striped">
                <thead>
                  <tr>
                    <th>Matricula</th>
                    <th>Nome</th>
                    <th>Email</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>54321</td>
                    <td>Otavio Augusto</td>
                    <td>Email@email.com</td>
                    <td>
                      <a href="" class="btn btn-secondary btn-sm">Visualizar</a>
                      <a href="" class="btn btn-success btn-sm">Editar</a>
                      <form action="" method="POST" class="d-inline">
                        <button type="submit" name="delete-usuario" value="1" class="btn btn-danger btn-sm">Excluir</button>
                      </form>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  </body>
</html>