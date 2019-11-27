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
				<table>
					<tr>
						<th><i class="material-icons">person</i>ID</th>
						<th><i class="material-icons">people_alt</i>Nome</th>
						<th><i class="material-icons">account_box</i>Senha</th>
						<th><i class="material-icons">account_box</i>Email</th>
						<th><i class="material-icons">account_box</i>Tipo</th>
						<th>Acciones</th>
					</tr>
					<?php foreach($lista as $usuario): ?>
					<tr>
						<td><?php echo $usuario->getId(); ?></td>
						<td><?php echo $usuario->getNome(); ?></td>
						<td><?php echo $usuario->getSenha(); ?></td>
						<td><?php echo $usuario->getEmail(); ?></td>
						<td><?php echo $usuario->getTipo(); ?></td>
						<td >
							<i id="act1" class="material-icons" onclick="window.location='usuario-edita.php?id=<?php echo $usuario->getId(); ?>';">create</i>
							<i class="material-icons" onclick="confirm('Deseja exclir este registro?') ? window.location='usuario-deleta-ok.php?id=<?php echo $usuario->getId(); ?>' : stop = false;" >remove_circle</i>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
				</div>
			</div>
		</section>
		<script src="assets/js/main.js"></script>
		
	</body>
</html>	