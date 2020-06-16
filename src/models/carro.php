<?php

class Carro{
    private $chassi; 
    private $marca;
    private $modelo;
    private $cor;
    private $omotor;

    public function __construct(){
        echo("Carro criado!");
    }

    public function getChassi (){
        return $this->chassi;
    }
    public function getMarca (){
        return $this->marca;
        }
    public function getModelo (){
        return $this->modelo;
    }
    public function getoMotor (){
        return $this->omotor;
    }
    public function getCor (){
        return $this->cor;
    }

    public function setChassi (){
        $this->$chassi = $chassi;
    }
    public function setMarca (){
        $this->$marca = $marca;
    }
    public function setModelo (){
        $this->$modelo = $modelo;
    }
    public function setcor (){
        $this->$cor = $cor;
    }
    public function setoMotor (){
        $this->$motor = $omotor;
    }
    public function incluir (){
        echo("Carro incluso");
    }
    

}