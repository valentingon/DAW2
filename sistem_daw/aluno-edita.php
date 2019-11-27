<?php
include_once 'classes/autoload.php';

//Verifica se veio tudo preenchido do formulário
if (isset($_GET['id']) && $_GET['id'] != "") {

    $usuario = new Usuario();
    $usuario->setId($_GET['id']);

    $usuarioDao = new UsuarioDao();
    $userData = $usuarioDao->selectById($usuario);
    
}
?>
<?php
include_once 'classes/autoload.php';

Login::checkAuth();
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
				<form  action="aluno-edita-ok.php" method="POST">
					<label>Matricula</label>
					<input type="text" class="form-control" value="<?php echo $userData->getMatricula(); ?>" name="matricula" required="true">
					
					<label>Nome</label>
					<input type="text" class="form-control" value="<?php echo $userData->getNome(); ?>" name="nome" required="true">

					<label>Sexo:</label>
						 <input id="sexo_css" type="radio" name="gender" value="<?php echo $userData->getSexo(); ?>" required="true">Homem
						 <p><input type="radio" name="gender" value="<?php echo $userData->getSexo(); ?>" required="true">Mulher</p>
						 <p><input type="radio" name="gender" value="<?php echo $userData->getSexo(); ?>" required="true"> Outro</p>
						 
					<label>Imagem</label>
						<input  type="file" placeholder="Imagem" name="imagem" required="true">


					<button type="submit"  class="button button1">Salvar</button>

				</form>
			</div>
		</section>
		<script src="assets/js/main.js"></script>
		
	</body>
</html>	