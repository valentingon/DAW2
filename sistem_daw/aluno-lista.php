<?php 
include_once 'classes/autoload.php';

Login::checkAuth();

$usuarioDao = new UsuarioDao();
$lista = $usuarioDao->select();
?>
<html>
	<head>
		<title>Inicio</title>
		<meta charset="UTF-8">
		<link rel='stylesheet' type="text/css" href="css/welcome.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
	</head>
	<body>
			<nav id="barra-iz">
				<div id="primero">
						<img id="logo_imagen" src="upload/if_logo.png">
						<p id="menu_text">Viagem</p>
							<div class="sidenav">
							  <a href="welcome.php">Inicio</a>
								
								 <button class="dropdown-btn">Viagems
								<i class="fa fa-caret-down"></i>
							  </button>
							  <div class="dropdown-container">
								<a href="usuario-lista.php">Listar</a>
								<a href="usuario-cadastra.php">Agregar</a>
								
							  </div>
							  
							   <button class="dropdown-btn">Alunos
								<i class="fa fa-caret-down"></i>
							  </button>
							  <div class="dropdown-container">
								<a href="produto-lista.php">Listar</a>
								<a href="produto-cadastra.php">Agregar</a>
							  </div>
							  
							  <button class="dropdown-btn">Usuarios
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
					<p id="sis">Sistema de Viagems</p>
					<p id="perfil"><a href="perfil.html">| Meu Perfil</a></p>
				</div>
				
			</div>
			<div id="medio">
				<table>
					<tr>
						<th><i class="material-icons">person</i>Matricula</th>
						<th><i class="material-icons">people_alt</i>Nome</th>
						<th><i class="material-icons">account_box</i>Idade</th>
						<th><i class="material-icons">account_box</i>Sexo</th>
						<th><i class="material-icons">account_box</i>Imagem</th>
						<th>Acciones</th>
					</tr>
					 <?php foreach($lista as $aluno): ?>
                              
					  <tr>
						  <td><?php echo $aluno->getMatricula(); ?></td>
						  <td><?php echo $aluno->getNome(); ?></td>
						  <td><?php echo $aluno->getIdade(); ?></td>
						  <td><?php echo $aluno->getSexo(); ?></td>
						  <td><?php echo $aluno->getImagem(); ?></td>
						  
						<td >
							<i id="act1" class="material-icons" onclick="window.location='aluno-edita.php?id=<?php echo $aluno->getMatricula(); ?>';">create</i>
							<i class="material-icons" onclick="confirm('Deseja exclir este registro?') ? window.location='aluno-deleta-ok.php?id=<?php echo $aluno->getMatricula(); ?>' : stop = false;" >remove_circle</i>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</section>
		<script src="js/main.js"></script>
		
	</body>
</html>	
