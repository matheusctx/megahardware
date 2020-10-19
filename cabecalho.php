<!DOCTYPE html>
<html >
	<head>
		<meta charset="utf-8">
		<title>Projeto web</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta name="description" content="">
		<meta name="author" content="josenilton">
		
		 <!-- Bootstrap core JavaScript -->
		<script src="jquery/jquery.min.js"></script>

		<link rel="stylesheet" href="css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
		<link href="css/business-frontpage.css" rel="stylesheet">
		<script src="js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	</head>
	
<body>
		 <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #4361ee;">
    <div class="container">
      <a class="navbar-left" href="#"><img src="imagens/logo1.png" alt="logo" height="50" width="100"  class="img-responsive"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
		  <li class="nav-item dropdown">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Produto</a>
				<div class="dropdown-menu">
					<a class="dropdown-item" href="cadastro.php">Cadastrar Produto</a>
					<a class="dropdown-item" href="lista-produto.php">Listar Computador</a>
					<a class="dropdown-item" href="lista-impressora.php">Listar Impressora</a>
				</div>
		  </li>
          <li class="nav-item">
            <a class="nav-link" href="compra-produto.php">Nova Venda</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contato.php">Contato</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>