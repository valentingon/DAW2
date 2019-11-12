<?php
include_once 'classes/autoload.php';

Login::checkAuth();
?>
<html>
	<head>
		<title>Inicio</title>
		<meta charset="UTF-8">
		<link rel='stylesheet' type="text/css" href="css/welcome.css">
		<link rel='stylesheet' type="text/css" href="css/produto.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	</head>
	<body>
			<nav id="barra-iz">
				<div id="primero">
						<img id="logo_imagen" src="upload/tattoo_logo.png">
						<p id="menu_text">Tattoos</p>
							<div class="sidenav">
							  <a href="welcome.php">Inicio</a>
								
								 <button class="dropdown-btn">Usuarios
								<i class="fa fa-caret-down"></i>
							  </button>
							  <div class="dropdown-container">
								<a href="usuario-lista.php">Listar</a>
								<a href="usuario-cadastra.php">Agregar</a>
								
							  </div>
							  
							   <button class="dropdown-btn">Productos
								<i class="fa fa-caret-down"></i>
							  </button>
							  <div class="dropdown-container">
								<a href="produto-lista.php">Listar</a>
								<a href="produto-cadastra.php">Agregar</a>
							  </div>
							  
							</div>
					</div>
			</nav>
			<div id="sup">
				<div id="sup_ind">
					<p id="sis">Sistema de Tattoos</p>
					<p id="perfil"><a href="perfil.html">| Meu Perfil</a></p>
				</div>
				
			</div>
			<div id="medio">
				<div class="forrm">
					<div class="forrm">
						<form  action="usuario-cadastra-ok.php" method="POST">
						
							<label>Nome</label>
							<input type="text" class="form-control" placeholder="Nome" name="nome" required="true">
						
							<label>Senha</label>
							<input type="password" class="form-control" placeholder="Senha" name="senha" required="true">

							<label>Confirmar Senha</label>
							<input type="password" class="form-control" placeholder="Confirmar" name="confirmar" required="true">

							<label>E-mail(Login)</label>
							<input type="email" class="form-control" placeholder="E-mail" name="email" required="true">


						<button type="submit"  class="button button1">Salvar</button>

					</form>
			</div>
		</section>
		<script src="js/main.js"></script>
		
	</body>
</html>	
