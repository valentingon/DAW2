<?php

class ProdutoDao extends Db implements InterfaceDao {

    private $table = 'produto';

    public function insert($produto) {
        $stmt = $this->conexao->prepare("INSERT INTO {$this->table} "
        . " (produto, descricao, preco, imagem) "
         . " VALUES (:produto, :descricao, :preco, :imagem)");

        $stmt->bindValue(':produto', $produto->getProduto());
        $stmt->bindValue(':descricao', $produto->getDescricao());
        $stmt->bindValue(':preco', $produto->getPreco());
        $stmt->bindValue(':imagem', $produto->getImagem());

        return $stmt->execute();
    }
    
    public function update($produto) {
        $stmt = $this->conexao->prepare("UPDATE {$this->table} "
                . "SET produto=:produto, "
                . "descricao = :descricao, "
                . "preco = :preco, "
                . "imagem = :imagem "
                . "WHERE id = :id;");

        $stmt->bindValue(':id', $produto->getId());
        $stmt->bindValue(':produto', $produto->getProduto());
        $stmt->bindValue(':descricao', $produto->getDescricao());
        $stmt->bindValue(':preco', $produto->getPreco());
        $stmt->bindValue(':imagem', $produto->getImagem());
        

        return $stmt->execute();
    }    

    public function delete($produto) {
        $stmt = $this->conexao->prepare("DELETE FROM {$this->table} "
                . " WHERE id = :id");

        $stmt->bindValue(':id', $produto->getId());
        
        return $stmt->execute();
    }

    public function select() {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table");
        $stmt->execute();

        $produtos = array();

        while ($linha = $stmt->fetch()) {
            $produto = new Produto();
            $produto->setProduto($linha['produto']);
            $produto->setDescricao($linha['descricao']);
            $produto->setPreco($linha['preco']);
            $produto->setImagem($linha['imagem']);
            $produto->setId($linha['id']);

            $produtos[] = $produto;
        }
        return $produtos;
    }

    public function selectById($produto) {
        $stmt = $this->conexao->prepare("SELECT * FROM $this->table WHERE id = :id");
        
        $stmt->bindValue(':id', $produto->getId());
        $stmt->execute();
        
        $linha = $stmt->fetch();

        $produto = new Produto();
        $produto->setProduto($linha['produto']);
        $produto->setDescricao($linha['descricao']);
        $produto->setPreco($linha['preco']);
        $produto->setImagem($linha['imagem']);
        $produto->setId($linha['id']);
        
        return $produto;
    }
}
