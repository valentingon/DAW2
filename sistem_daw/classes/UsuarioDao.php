<?php

class UsuarioDao extends Db implements InterfaceDao {

    private $table = 'usuario';

    public function insert($usuario) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} (id, nome, senha, email, tipo) VALUES (:id, :nome, :senha, :email, :tipo)");
		
		 $stmt->bindValue(':id', $usuario->getId());
        $stmt->bindValue(':nome', $usuario->getNome());
        $stmt->bindValue(':senha', $usuario->getSenha());
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->bindValue(':tipo', $usuario->getTipo());

        return $stmt->execute();
    }
    
	
	
    public function update($usuario) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} (id, nome, senha, email, tipo) VALUES (:id, :nome, :senha, :email, :tipo)");

        $stmt->bindValue(':id', $usuario->getId());
        $stmt->bindValue(':nome', $usuario->getNome());
        $stmt->bindValue(':senha', $usuario->getSenha());
        $stmt->bindValue(':email', $usuario->getEmail());
        $stmt->bindValue(':tipo', $usuario->getTipo());
		
        return $stmt->execute();
    }  



	

    public function delete($usuario) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $usuario->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $usuarios = array();

        while ($linha = $stmt->fetch()) {
            $usuario = new Usuario();
			$usuario->setId($linha['id']);
            $usuario->setNome($linha['nome']);
            $usuario->setSenha($linha['senha']);
            $usuario->setEmail($linha['email']);
            $usuario->setTipo($linha['tipo']);
            

            $usuarios[] = $usuario;
        }
        return $usuarios;
    }

    public function selectById($usuario) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $usuario->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $usuario = new Usuario();
		$usuario->setId($linha['id']);
        $usuario->setNome($linha['nome']);
        $usuario->setSenha($linha['senha']);
        $usuario->setEmail($linha['email']);
        $usuario->setTipo($linha['tipo']);
        
        
        return $usuario;
    }
}
