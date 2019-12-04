<?php
session_start();

class Login extends Db {
    static function checkAuth(){        
        if(!isset($_SESSION['login'])){
            header("Location:login.php");
        }
    }    
    
    function verificaLogin($usuario){        
           
        $stmt = $this->conexao->prepare("SELECT * FROM usuario "
                . "WHERE senha = :senha AND email = :email");
 
        $stmt->bindValue(':senha', $usuario->getSenha());
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->execute();
		$return = false;
    

        if($result = $stmt->fetch()){
			$_SESSION["logado"] = true;
			$_SESSION["id"] = $result['id'];
			
			if($result['tipo'] == "ROOT")
				$_SESSION["tipo"] = "ROOT";
			if($result['tipo'] == "SUP")
				$_SESSION["tipo"] = "SUP";
			else
				$_SESSION["tipo"] = "PROF";
			$return = true;
		}
		return $return;
   
    }
}

