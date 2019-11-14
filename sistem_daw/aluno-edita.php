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
								
								 <button class="dropdown-btn">Viagems
								<i class="fa fa-caret-down"></i>
							  </button>
							  <div class="dropdown-container">
								<a href="viagem-lista.php">Listar</a>
								<a href="viagem-cadastra.php">Agregar</a>
								
							  </div>
							  
							   <button class="dropdown-btn">Alunos
								<i class="fa fa-caret-down"></i>
							  </button>
							  <div class="dropdown-container">
								<a href="aluno-lista.php">Listar</a>
								<a href="aluno-cadastra.php">Agregar</a>
							  </div>
							  
							</div>
					</div>
			</nav>
			<div id="sup">
				<div id="sup_ind">
					<p id="sis">Sistema de Viagems</p>
					<p id="perfil"><a href="perfil.html">| Meu Perfil</a></p>
				</div>
				
			</div>
			<div id="medio">
				<form  action="aluno-edita-ok.php" method="POST">
					<input type="hidden" name="id" value="<?php echo $userData->getMatricula(); ?>" >
					<label>Nome</label>
					<input type="text" class="form-control" value="<?php echo $userData->getNome(); ?>" name="nome" required="true">
				
					<label>Senha</label>
					<input type="password" class="form-control" value="<?php echo $userData->getSenha(); ?>" name="senha" required="true">

					<label>Confirmar Senha</label>
					<input type="password" class="form-control" value="<?php echo $userData->getSenha(); ?>" name="confirmar" required="true">

					<label>E-mail(Login)</label>
					<input type="email" class="form-control" value="<?php echo $userData->getEmail(); ?>" name="email" required="true">


					<button type="submit"  class="button button1">Salvar</button>

				</form>
			</div>
		</section>
		<script src="js/main.js"></script>
		
	</body>
</html>	