<?php
include_once 'classes/autoload.php';

Login::checkAuth();

//Verifica se veio tudo preenchido do formulário
if (isset($_POST['matricula']) && $_POST['matricula'] != "" 
        && isset($_POST['nome']) && $_POST['nome'] != ""
        && isset($_POST['idade']) && $_POST['idade'] != "")
		&& isset($_POST['sexo']) && $_POST['sexo'] != "") 		{

    $aluno = new Aluno();
    $aluno->setMatricula($_POST['matricula']);
    $aluno->setNome($_POST['nome']);
    $aluno->setIdade($_POST['idade']);
    $aluno->setSexo($_POST['sexo']);

    $alunoDao = new AlunoDao();
    $alunoDao->update($aluno);
}
?>


<!DOCTYPE html>
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
						<img id="logo_imagen" src="upload/ifsul_logo.png">
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
							  
							  <button class="dropdown-btn">Usuarios
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
					<p id="sis">Sistema de Viagems</p>
					<p id="perfil"><a href="perfil.html">| Meu Perfil</a></p>
				</div>
				
			</div>
			<div id="medio">
				<div class="conteudo">
					<h1>Editado</h1>
				</div>
			</div>	
		<script src="js/main.js"></script>
		
	</body>
</html>		  