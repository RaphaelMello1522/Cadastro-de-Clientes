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

    <title>Olá</title>
  </head>
  <body>
       <nav class="navbar navbar navbar-light bg-light">
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
      <a><?php echo $_SESSION['nome'];  ?></a>
            <form class="d-flex">

       <a href="logout.php">Sair</a>
      </form>
   
    </div>
    </div>
  </div>
</nav>
  	<div class="container">
  		<div class="row">
  			<div class="col">
    <h1>Cadastro de Telefones dos Clientes!</h1>
    <form action="cadastro_telefone_script.php" method="POST">
  <input type="text" class="form-control" placeholder="DDD" name="ddd" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="form-group">
  <input type="text" class="form-control" placeholder="Fone" name="fone" aria-describedby="basic-addon2" required>
</div>
<div class="form-group">
  <input type="text" class="form-control" placeholder="Tipo" name="tipo" aria-describedby="basic-addon2">
</div>

<?php 
        include_once "db.php";

        $sql = "select * from clientes";
        $execult_sql = mysqli_query($conn, $sql);

          
?>


<center><div class="form-group">
  <a>Selecione o Cliente</a>
  <select name="selectoption2">
    <?php 
    foreach ($execult_sql as $clientes_idclientes): 
      ?>
      <option value="<?php echo $clientes_idclientes['id_clientes'] ?>"> <?php echo $clientes_idclientes['nome'];?></option>
    <?php endforeach;?>
  </select>
</div>
</center>

<?php 
        include_once "db.php";

        $sql2 = "select * from usuarios";
        $exe_sql = mysqli_query($conn, $sql2);

          
?>
<center><div class="form-group">
  <a>Selecione o Usuário que está registrando!</a>
  <select name="selectoption">
    <?php 
    foreach ($exe_sql as $usuarios): 
      ?>
      <option value="<?php echo $usuarios['idusuarios'] ?>"> <?php echo $usuarios['nome'];?></option>
    <?php endforeach;?>
  </select>
</div>
</center>

<div class="form-group">
  <input type="submit" class="btn btn-success">
  <a href="index.php" class="btn btn-info">Voltar a Página Inicial</a>
</div>

</form>
</div>
</div>
</div>


</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>