<?php
include_once 'classes/autoload.php';
ob_start();
session_start();

if (isset($_POST['password']) && isset($_POST['email']) 
        && $_POST['password'] != "" && $_POST['email'] != "") {
    $usuario = new Usuario();
    $usuario->setEmail($_POST['email']);
    $usuario->setSenha($_POST['password']);
	
	$a = $_POST['tipos'];

    $login = new Login();
    
	if($login = $login->verificaLogin($usuario)){
		if($a == "ROOT"){
			$_SESSION["tipo"] = "ROOT";
			$_SESSION["login"] = true;
			//var_dump($_SESSION, "aqui_1");
			header("location:welcomeROOT.php");
		}
		if($a == "SUP"){
			$_SESSION['tipo']="SUP";
			$_SESSION["login"] = true;
			//var_dump($_SESSION, "aqui_2");
			header("location:welcomeSUP.php");
		}
		
		if($_SESSION['tipo']=="PROF"){
			$_SESSION['tipo']="PROF";
			$_SESSION["login"] = true;
			//var_dump($_SESSION, "aqui_3");
			header("location:welcomePROF.php");
		}
	}else{
		$msg = "Complete todos los campos";
	echo $msg;}
}
?>