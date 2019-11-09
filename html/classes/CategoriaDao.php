<?php

class CategoriaDao extends Db implements InterfaceDao {

    private $table = 'categoria';

    public function insert($categoria) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} (nome) VALUES (:nome)");

        $stmt->bindValue(':nome', $categoria->getNome());


        return $stmt->execute();
    }
    
    public function update($categoria) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET nome=:nome WHERE id = :id;");

        $stmt->bindValue(':id', $categoria->getId());
        $stmt->bindValue(':nome', $categoria->getNome());


        return $stmt->execute();
    }    

    public function delete($categoria) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $categoria->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $categorias = array();

        while ($linha = $stmt->fetch()) {
            $categoria = new Categoria();
            $categoria->setNome($linha['nome']);

            $categoria->setId($linha['id']);

            $categorias[] = $categoria;
        }
        return $categorias;
    }

    public function selectById($categoria) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $categoria->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $categoria = new Categoria();
        $categoria->setNome($linha['nome']);
        $categoria->setId($linha['id']);
        
        return $categoria;
    }
}
