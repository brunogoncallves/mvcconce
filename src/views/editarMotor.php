<!DOCTYPE HTML>
<html>
    <?php include("head.php") ?>
    <body>
        <?php include("menu.php") ?>
        <?php require_once("../controller/controllerUpdateMotor.php"); ?>

        <div class="row">
            <form method="post" action="../controller/controllerUpdateMotor.php" id="form" name="form" class="col-10">
                <div class="form-group">
                <input class="form-control" type="text" id="potencia" name="potencia" placeholder="potencia do motor" required autofocus>
                    <input class="form-control" type="text" id="cilindro" name="cilindro" placeholder="quantidade de cilindros do motor" required>
                    <input class="form-control" type="text" id="chassi" name="chassi" placeholder="carro" required>   
                </div>
                <div class="form-group">
                <input type="hidden" id="idMotor" name="idMotor" value="<?php echo $editar->getId(); ?>">                                       
                    <button type="submit" class="btn btn-sucess" id="editar" name="submit" value="editar">Editar Motor</button> 
                </div>            
            </form>   
        </div>
        
    </body>
</html>