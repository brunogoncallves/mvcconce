<?php
require_once '../models/motorDb.php';
class ControllerListMotor{
    private $motorDb;

    public function __construct(){
        $this->motorDb = new MotorDb();
        $this->criarTabela();
    }

    public function criarTabela(){
        $result = $this->motorDb->getMotores();
        foreach ($result as $motor){
            echo("<tr>");
            echo("<th>".$motor['MotorID']."</th>"); 
            echo("<td>".$motor['potencia']."</td>");
            echo("<td>".$motor['qntCilindros']."</td>");
            echo("<td>".$motor['chassi']."</td>");   
            echo("<td><a class='btn btn-warning' href='editarMotor.php?chassi=".$motor['MotorID']."'>Editar Motor</a></td>");
            echo("</tr>");
        } 
    }
}