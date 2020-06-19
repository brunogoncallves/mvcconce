<?php
require_once("../config/db.php");
class MotorDb{
    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }

    public function conexao(){
        $this->mysqli = new mysqli(DB_SERVIDOR, DB_USUARIO, DB_SENHA, DB_BANCO);
    }  

    public function setMotor($potencia, $cilindros, $chassi){
        $sql = $this->mysqli->prepare("INSERT INTO Motores (`potencia`, `qntCilindros`, `chassi`) VALUES (?,?,?)");
        $sql->bind_param("sss", $potencia, $cilindros, $chassi);
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getMotores(){
        $sql = $this->mysqli->query("SELECT * FROM Motores");
        while($row=$sql->fetch_array(MYSQLI_ASSOC)){
            $array[]=$row;
        }
        return $array;
    }

    public function updateMotor($potencia, $cilindros, $chasi, $MotorID){
        $sql = $this->mysqli->prepare("UPDATE `Motores` SET `potencia` = ?, `cilindros` = ?, `chasi` = ? WHERE `MotorID` = ?");
        $sql->bind_param("ssss",$potencia, $cilindros, $chasi,$MotorID);
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getMotorById($MotorID){
        $sql = $this->mysqli->query("SELECT * FROM Motores WHERE MotorID='$MotorID'");
        return $sql->fetch_array(MYSQLI_ASSOC);
    }
}