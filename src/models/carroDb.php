<?php 
require_once("../config/db.php");
class CarroDb{
    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }
 
    public function conexao(){
        $this->mysqli = new mysqli(DB_SERVIDOR, DB_USUARIO, DB_SENHA, DB_BANCO);
    }

    public function setCarro($marca, $modelo, $cor){
        
        $sql = $this->mysqli->prepare("INSERT INTO Carros (`marca`, `modelo`, `cor`) VALUES (?,?,?)");
        $sql->bind_param("sss", $marca, $modelo, $cor);
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getCarros(){
        $sql = $this->mysqli->query("SELECT * FROM Carros");
        while($row=$sql->fetch_array(MYSQLI_ASSOC)){
            $array[]=$row;
        }
        return $array;
    } 

    public function deleteCarro($chassi){
        $sql = $this->mysqli->prepare("DELETE FROM `Motores` WHERE `chassi` = ?");        
        $sql->bind_param("s",$chassi);
        if($sql->execute()){
            $sql = $this->mysqli->prepare("DELETE FROM `Carros` WHERE `chassi` = ?");
            $sql->bind_param("s",$chassi);
            if($sql->execute()){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public function updateCarro($chassi,$marca, $modelo, $cor){
        $sql = $this->mysqli->prepare("UPDATE `Carros` SET `marca` = ?, `modelo` = ?, `cor` = ? WHERE `chassi` = ?");
        $sql->bind_param("ssss",$marca, $modelo, $cor,$chassi);
        if($sql->execute()){
            return true;
        }else{
            return false;
        }
    }

    public function getCarroByChassi($chassi){
        $sql = $this->mysqli->query("SELECT * FROM Carros WHERE chassi='$chassi'");
        return $sql->fetch_array(MYSQLI_ASSOC);
    }
}