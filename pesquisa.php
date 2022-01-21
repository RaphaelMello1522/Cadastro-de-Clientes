<?php

	include("db.php");

  include('protect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Pesquisar</title>
  </head>
  <body>

     <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dev Web PHP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-1 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cadastro.php">Cadastro</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Mais
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="cadastro_telefone.php">Cadastro Telefone</a></li>
            <li><a class="dropdown-item" href="cadastro_endereco.php">Cadastro Endereço</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="pesquisa.php">Pesquisar Cliente</a></li>
            <li><hr class="dropdown-divider"></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"></a>
        </li>
      </ul>
      <form class="d-flex">
       
      </form>
    </div>
  </div>
</nav>

    <?php

     

    include "db.php";

       $pesquisa = $_POST['busca'] ?? '';
       $pesquisaend = $_POST['busca1'] ?? '';
       $pesquisatel = $_POST['busca2'] ?? '';

    $sql = "SELECT * FROM clientes WHERE nome LIKE '%$pesquisa%'";

    $dados = mysqli_query($conn, $sql);

    ?>

      <?php          
         $sql2 = "SELECT * FROM enderecos WHERE logradouro LIKE '%$pesquisaend%'";
    $dados1 = mysqli_query($conn, $sql2);

      ?>

     <?php 
         $sql3 = "SELECT * FROM telefones WHERE fone LIKE '%$pesquisatel%'";
    $dados2 = mysqli_query($conn, $sql3);


      ?>


  	<div class="container">
  		<div class="row">
  			<div class="col">
    <h1>O que gostaria de Pesquisar?</h1>
    <nav class="navbar navbar-light bg-light">
  <form class="form-control" action="pesquisa.php" method="POST" autofocus>
    <input class="form-control mr-sm-2" type="search" placeholder="Digite o Nome do Cliente" aria-label="Search" name="busca" autofocus>
    <button class="btn btn-info my-2 my-sm-0" type="submit">Procurar</button>
  </form>
</nav>


<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Tipo</th>
      <th scope="col">Data de Nascimento</th>
      <th scope="col">Endereço</th>
      <th scope="col">Cidade</th>
      <th scope="col">Cep</th>
      <th scope="col">UF</th>
      <th scope="col">DDD</th>
      <th scope="col">NUM</th>
      <th scope="col">Tipo</th>
      <th scope="col">Opções</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    if($linha = mysqli_fetch_assoc($dados) ) {
      $id_clientes = $linha['id_clientes'];
      $nome = $linha['nome'];
      $cpf = $linha['cpf'];
      $tipo = $linha['tipo'];
      $data_nascimento = $linha['dtnasc'];
      
      if($linha = mysqli_fetch_assoc($dados1)){

        $logradouro = $linha['logradouro'];
        $cidade = $linha['cidade'];
        $cep = $linha['cep'];
        $uf = $linha['uf'];

        if($linha = mysqli_fetch_assoc($dados2)){

        $ddd = $linha['ddd'];
        $telefone = $linha['fone'];
        $meio = $linha['tipo'];

      echo "<tr>
                <th scope='row'>$nome</th>
                <td>$cpf</td>
                <td>$tipo</td>
                <td>$data_nascimento</td>
                <td>$logradouro</td>
                <td>$cidade</td>
                <td>$cep</td>
                <td>$uf</td>
                <td>$ddd </td>
                <td>$telefone</td>
                <td>$meio</td>
                <td><a href='cadastro_edit.php?id=$id_clientes' class='btn btn-success btn-sm'>Editar</button></a>
                    <a href='#' class='btn btn-danger btn-sm' data-toggle='modal' data-target='#Confirmação'>Excluir</a>
                    

                </td>
                </tr>";
      
    }
  }
}

    ?>

  

   
  </tbody>
</table>

<div class="modal fade" id="Confirmação" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmação de Exclusão</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="excluir_script.php" method="POST">
        <p>Deseja realmente excluir?</p>
        <p id="nome_pessoa">Nome da Pessoa</p>
      </div>
      <div class="modal-footer">
        <input type="submit" value="Sim" class="btn btn-danger"></input>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
      </form>
      </div>
    </div>
  </div>
</div>
    

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>