<?php

class UsuarioDao extends Db implements InterfaceDao {

    private $table = 'viagem';

    public function insert($viagem) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} (distancia, lugar, n_alunos) VALUES (:distancia, :lugar, :n_alunos)");

        $stmt->bindValue(':distancia', $viagem->getDistancia());
        $stmt->bindValue(':lugar', $viagem->getLugar());
        $stmt->bindValue(':n_alunos', $viagem->getN_alunos());

        return $stmt->execute();
    }
    
    public function update($viagem) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET distancia=:distancia, lugar = :lugar, n_alunos = :n_alunos WHERE id = :id;");

        $stmt->bindValue(':id', $viagem->getId());
        $stmt->bindValue(':distancia', $viagem->getDistancia());
        $stmt->bindValue(':lugar', $viagem->getLugar());
        $stmt->bindValue(':n_alunos', $viagem->getN_alunos());

        return $stmt->execute();
    }    

    public function delete($viagem) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $viagem->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $usuarios = array();

        while ($linha = $stmt->fetch()) {
            $viagem = new Viagem();
            $viagem->setDistancia($linha['distancia']);
            $viagem->setLugar($linha['lugar']);
            $viagem->setN_alunos($linha['n_alunos']);
            $viagem->setId($linha['id']);

            $viagems[] = $viagem;
        }
        return $viagems;
    }

    public function selectById($viagem) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $viagem->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $viagem = new Viagem();
        $viagem->setDistancia($linha['distancia']);
        $viagem->setLugar($linha['lugar']);
        $viagem->setN_alunos($linha['N_alunos']);
        $viagem->setId($linha['id']);
        
        return $viagem;
    }
}
