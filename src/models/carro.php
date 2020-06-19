<?php
require_once('carroDb.php');
class Carro extends CarroDb{
    private $chassi; 
    private $marca;
    private $modelo;
    private $cor;     

    public function getChassi(){
        return $this->chassi;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function getCor(){
        return $this->cor;
    }
    
    public function setChassi($chassi){
        $this->chassi = $chassi;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    
    public function incluir(){
        return $this->setCarro($this->getMarca(), $this->getModelo(), $this->getCor());
    }

}