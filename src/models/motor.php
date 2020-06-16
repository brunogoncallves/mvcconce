<?php

class motor{
    private $potencia;
    private $cilindro;
    private $chassi;

    public function __construct(){
        echo("motor criado");
    }

    public function getPotencia(){
        return $this->potencia;
    }
    public function getCilindro(){
        return $this->cilindros;
    }
    public function getChassi(){
        return $this->chassi;
    }
    public function setPotencia($potencia){
        $this->potencia = $potencia;
    }
    public function setCilindro($cilindro){
        $this->cilindro = $cilindro;
    }
    public function setChassi($chassi){
        $this->chassi = $chassi;
    }

    public function incluir(){
        echo("Motor Incluso");
    }
}