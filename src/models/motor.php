<?php
require_once('motorDb.php');
class Motor extends MotorDb{
    private $potencia;
    private $cilindro;
    private $chassi;
   
    public function getPotencia(){
        return $this->potencia;
    }
    public function getCilindro(){
        return $this->cilindro;
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
        return $this->setMotor($this->getPotencia(), $this->getCilindro(), $this->getChassi());
    }
}