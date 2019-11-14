<?php

class Aluno {
    private $matricula;
    private $nome;
    private $idade;
    private $sexo;
    private $imagem;
    
    function getMatricula() {
        return $this->matricula;
    }

    function getNome() {
        return $this->nome;
    }

    function getIdade() {
        return $this->idade;
    }

    function getSexo() {
        return $this->sexo;
    }

    function getImagem() {
        return $this->imagem;
    }

    function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setSexo($sexo) {
        $this->sexo = $sexo;
    }

    function setImagem($imagem) {
        $this->imagem = $imagem;
    }


}