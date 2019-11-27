<?php

class Viagem {
    private $id;
    private $distancia;
    private $lugar;
    private $n_alunos;
    private $relatorio;
    
    function getId() {
        return $this->id;
    }

    function getDistancia() {
        return $this->distancia;
    }

    function getLugar() {
        return $this->lugar;
    }

    function getN_alunos() {
        return $this->n_alunos;
    }
	
	function getRelatorio() {
        return $this->relatorio;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDistancia($distancia) {
        $this->distancia = $distancia;
    }

    function setLugar($lugar) {
        $this->lugar = $lugar;
    }

    function setN_alunos($n_alunos) {
        $this->n_alunos = $n_alunos;
    }
	
	function setRelatorio($relatorio) {
        $this->relatorio = $relatorio;
    }


}