<?php
require_once("../models/motor.php");
class ControllerCreateMotor{
    private $oMotor;
    public function __construct(){
        $this->oMotor = new Motor();
        $this->cadastrar();
    } 

    public function cadastrar(){
        echo($_POST['potencia']);
        $this->oMotor->setPotencia($_POST['potencia']);
        $this->oMotor->setCilindro($_POST['cilindro']);
        $this->oMotor->setChassi($_POST['chassi']);

        $resultado = $this->oMotor->incluir();
        if($resultado>=1){
            echo("<script>alert('Motor cadastrado com sucesso!');document.location='../views/cadastroMotor.php'</script>");
        }else{
            echo("<script>alert('Infelizmente não foi possível cadastrar');history.back()</script>");
        }
    }
}
new ControllerCreateMotor();