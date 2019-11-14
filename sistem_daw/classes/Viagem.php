<?php

class Viagem {
    private $id;
    private $distancia;
    private $lugar;
    private $n_alunos;
    
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

    function setId($id) {
        $this->id = $id;
    }

    function setDistancia($distancia) {
        $this->distancia = $distancia;
    }

    function setLugar($lugar) {
        $this->lugar = $lugar;
    }

    function setN_alunos($N_alunos) {
        $this->n_alunos = $n_alunos;
    }


}