<?php
include_once 'classes/autoload.php';

Login::checkAuth();

$produtoDao = new ProdutoDao();
$lista = $produtoDao->select();
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
						<img id="logo_imagen" src="upload/tattoo_logo.png">
						<p id="menu_text">Tattoos</p>
							<div class="sidenav">
							  <a href="welcome.php">Inicio</a>
								
								 <button class="dropdown-btn">Usuarios
								<i class="fa fa-caret-down"></i>
							  </button>
							  <div class="dropdown-container">
								<a href="usuario-lista.php">Listar</a>
								<a href="usuario-cadastro.php">Agregar</a>
								
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
				<table>
					<tr>
						<th><i class="material-icons">person</i>ID</th>
						<th><i class="material-icons">people_alt</i>Producto</th>
						<th><i class="material-icons">account_box</i>Descripción</th>
						<th><i class="material-icons">account_box</i>Precio</th>
						<th><i class="material-icons">account_box</i>Imagen</th>
						<th>Acciones</th>
					</tr>
					<?php foreach($lista as $produto): ?>
					<tr>
						<td><?php echo $produto->getId(); ?></td>
						<td><?php echo $produto->getProduto(); ?></td>
						<td><?php echo $produto->getDescricao(); ?></td>
						<td><?php echo $produto->getPreco(); ?></td>
						<td><img  width="50" src="upload/<?php echo $produto->getImagem(); ?>"/></td>
						<td >
							<i id="act1" class="material-icons" onclick="window.location='produto-edita.php?id=<?php echo $produto->getId(); ?>';">create</i>
							<i class="material-icons" onclick="confirm('Deseja exclir este registro?') ? window.location='produto-deleta-ok.php?id=<?php echo $produto->getId(); ?>' : stop = false;" >remove_circle</i>
						</td>
					</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</section>
		<script src="js/main.js"></script>
		
	</body>
</html>	