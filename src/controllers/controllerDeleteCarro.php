<?php
require_once("../models/carroDb.php");
class ControllerDeleteCarro{
    private $carroDb;
    public function __construct($chassi){
        $this->carroDb = new CarroDb();
        if($this->carroDb->deleteCarro($chassi)){
            echo("<script>alert('Carro excluído com sucesso!');document.location='../views/index.php'</script>");            
        }else{
            echo("<script>alert('Infelizmente não foi possível excluir');history.back()</script>");
        }
    }
}
new ControllerDeleteCarro($_GET['chassi']);