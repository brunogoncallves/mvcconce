<?php
require_once("../models/carro.php");
class ControllerCreateCarro{
    private $oCarro;
    public function __construct(){
        $this->oCarro = new Carro();
        $this->cadastrar();
    }

    private function cadastrar(){                
        $this->oCarro->setMarca($_POST['marca']);
        $this->oCarro->setModelo($_POST['modelo']);
        $this->oCarro->setCor($_POST['cor']);
        $resultado = $this->oCarro->incluir();
        if($resultado>=1){
            echo("<script>alert('Carro cadastrado com sucesso!');document.location='../views/cadastroCarro.php'</script>");
        }else{
            echo("<script>alert('Infelizmente não foi possível cadastrar');history.back()</script>");
        }
    }
}
new ControllerCreateCarro();