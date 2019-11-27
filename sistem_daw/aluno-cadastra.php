<?php
include_once 'classes/autoload.php';

Login::checkAuth();
?>
<html>
	<head>
		<title>Inicio</title>
		<meta charset="UTF-8">
		<link rel='stylesheet' type="text/css" href="assets/css/perfil.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	</head>
	<body>
			<nav id="barra-iz">
				<div id="primero">
						<img id="logo_imagen" src="assets/img/ifsul_logo.jpg">
						<p id="menu_text">Viagens</p>
							<div class="sidenav">
							  <a href="welcome.php"><i class="material-icons">home</i>Inicio</a>
								
								 <button class="dropdown-btn"><i class="material-icons">airplanemode_active</i>Viagems
								<i class="fa fa-caret-down"></i>
							  </button>
							  <div class="dropdown-container">
								<a href="viagem-lista.php">Listar</a>
								<a href="viagem-cadastra.php">Agregar</a>
								
							  </div>
							  
							   <button class="dropdown-btn"><i class="material-icons">school</i>Alumnos
								<i class="fa fa-caret-down"></i>
							  </button>
							  <div class="dropdown-container">
								<a href="aluno-lista.php">Listar</a>
								<a href="aluno-cadastra.php">Agregar</a>
							  </div>
							  
							   <button class="dropdown-btn"><i class="material-icons">supervised_user_circle</i>Usuarios
								<i class="fa fa-caret-down"></i>
							  </button>
							  <div class="dropdown-container">
								<a href="usuario-lista.php">Listar</a>
								<a href="usuario-cadastra.php">Agregar</a>
							  </div>
							</div>
					</div>
			</nav>
			<div id="sup">
				<div id="sup_ind">
					<p id="sis">Sistema de Viagens</p>
					<p id="perfil"><a href="perfil.html">| Meu Perfil</a></p>
				</div>
				
			</div>
			<div id="medio">
			<h1 id="perfil_texto">Cadastro de Aluno</h1>
				<div id="img_perfil">
					<form  action="aluno-cadastra-ok.php" method="POST" enctype="multipart/form-data">
						<p><label>Matricula</label>
						<input type="text" name="matricula" required="true"></p>
						
						<p><label>Nombre</label>
						<input type="text" name="nome" required="true"></p>

						<p><label>Idade</label>
						<input  type="number"  name="idade" required="true" ></p>

						<label>Sexo:</label>
						 <input id="sexo_css" type="radio" name="sexo" value="homem">Homem
						 <p><input type="radio" name="sexo" value="mulher">Mulher</p>
						 <p><input type="radio" name="sexo" value="outro"> Outro</p> 

						<p><label>Imagem</label>
						<input  type="file" placeholder="Imagem" name="imagem" required="true"></p>


						<p><button type="submit"  class="button button1">Salvar</button></p>
					</form>
				</div>
			</div>
		</section>
		<script src="assets/js/main.js"></script>
	</body>
</html>	