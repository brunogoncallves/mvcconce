<!DOCTYPE HTML>
<html>
    <?php include("head.php") ?>
    <body>
        <?php include("menu.php") ?>
        <?php require_once("../controller/controllerUpdateCarro.php"); ?>

        <div class="row">
            <form method="post" action="../controller/controllerUpdateCarro.php" id="form" name="form" class="col-10">
                <div class="form-group">
                    <input class="form-control" type="text" id="marca" name="marca" placeholder="marca do carro" required autofocus>
                    <input class="form-control" type="text" id="modelo" name="modelo" placeholder="modelo do carro" required>
                    <input class="form-control" type="text" id="cor" name="cor" placeholder="cor do carro" required> 
                </div>
                <div class="form-group">
                <input type="hidden" id="chassi" name="chassi" value="<?php echo $editar->getChassi(); ?>">                                       
                    <button type="submit" class="btn btn-sucess" id="editar" name="submit" value="editar">Editar Carro</button> 
                </div>            
            </form>   
        </div>
        
    </body>
</html>