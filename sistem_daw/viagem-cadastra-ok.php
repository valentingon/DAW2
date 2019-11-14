<?php
include_once 'classes/autoload.php';

Login::checkAuth();

//Verifica se veio tudo preenchido do formulário
if (   !Validate::isEmpty('produto')
    && !Validate::isEmpty('descricao')
    && !Validate::isEmpty('preco')
    ) {

//inicio
$nomeArquivo="";
if (isset($_FILES['imagem'])&& $_FILES['imagem']['name'] !=""){
  $nomeArquivo=$_FILES['imagem']['name'];
  $origem=$_FILES['imagem']['tmp_name'];
  $destino='upload/'.$_FILES['imagem']['name'];
  $uploaddir = "upload/";
  $uploadfile = $uploaddir . basename($_FILES['imagem']['name']);
 if(!move_uploaded_file($origem, $uploadfile)){
    echo "erro33orientales";
 }

}

    $produto = new Produto();
    $produto->setProduto($_POST['produto']);
    $produto->setDescricao($_POST['descricao']);
    $produto->setPreco($_POST['preco']);
    $produto->setImagem($nomeArquivo);

    $produtoDao = new ProdutoDao();
    $produtoDao->insert($produto);
}
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
				<div class="conteudo">
					<h1>cadastrado</h1>
				</div>
			</div>	
		<script src="js/main.js"></script>
		
	</body>
</html>		  