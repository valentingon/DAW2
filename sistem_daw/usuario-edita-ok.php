<?php
include_once 'classes/autoload.php';

Login::checkAuth();

//Verifica se veio tudo preenchido do formulário
if (   !Validate::isEmpty('id')
    && !Validate::isEmpty('nome')
    && !Validate::isEmpty('senha')
    && !Validate::isEmpty('email')
    && !Validate::isEmpty('tipo')
	
	) {

    $usuario = new Usuario();
    $usuario->setId($_POST['id']);
    $usuario->setNome($_POST['nome']);
    $usuario->setSenha($_POST['senha']);
    $usuario->setEmail($_POST['email']);
    $usuario->setTipo($_POST['tipo']);

    $usuarioDao = new UsuarioDao();
    $usuarioDao->update($usuario);
}
?>
<html>
	<head>
		<title>Inicio</title>
		<meta charset="UTF-8">
		<link rel='stylesheet' type="text/css" href="assets/css/welcome.css">
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
				<div class="conteudo">
					<h1>Editado</h1>
				</div>
			</div>
		</section>
		<script src="assets/js/main.js"></script>
		
	</body>
</html>	