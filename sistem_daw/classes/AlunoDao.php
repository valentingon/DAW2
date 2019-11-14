<?php

class AlunoDao extends Db implements InterfaceDao {

    private $table = 'aluno';

    public function insert($aluno) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} "
        . " (matricula, nome, idade, sexo, imagem) "
         . " VALUES (:matricula, :nome, :idade, :sexo, :imagem)");

        $stmt->bindValue(':matricula', $aluno->getMatricula());
        $stmt->bindValue(':nome', $aluno->getNome());
        $stmt->bindValue(':idade', $aluno->getIdade());
        $stmt->bindValue(':sexo', $aluno->getSexo());
        $stmt->bindValue(':imagem', $aluno->getImagem());

        return $stmt->execute();
    }
    
    public function update($aluno) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET matricula=:matricula, "
                . "nome	= :nome, "
                . "idade = :idade, "
                . "sexo = :sexo, "
                . "imagem = :imagem "
                . "WHERE matricula = :matricula;");

        $stmt->bindValue(':matricula', aluno->getMatricula());
        $stmt->bindValue(':nome', $aluno->getNome());
        $stmt->bindValue(':idade', $aluno->getIdade());
        $stmt->bindValue(':sexo', $aluno->getSexo());
        $stmt->bindValue(':imagem', $aluno->getImagem());
        

        return $stmt->execute();
    }    

    public function delete($aluno) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE matricula = :matricula");

        $stmt->bindValue(':matricula', $aluno->getMatricula());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $alunos = array();

        while ($linha = $stmt->fetch()) {
            $aluno = new Aluno();
            $aluno->setMatricula($linha['matricula']);
            $aluno->setNome($linha['nome']);
            $aluno->setIdade($linha['idade']);
            $aluno->setSexo($linha['sexo']);
            $aluno->setImagem($linha['imagem']);

            $nomes[] = $aluno;
        }
        return $nomes;
    }

    public function selectById($aluno) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE matricula = :matricula");
        
        $stmt->bindValue(':matricula', $aluno->getMatricula());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $aluno = new Aluno();
			$aluno->setMatricula($linha['matricula']);
            $aluno->setNome($linha['nome']);
            $aluno->setIdade($linha['idade']);
            $aluno->setSexo($linha['sexo']);
            $aluno->setImagem($linha['imagem']);
        
        return $aluno;
    }
}
