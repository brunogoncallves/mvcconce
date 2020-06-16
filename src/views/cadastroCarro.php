<!DOCTYPE html>
<html>
    <?php include("head.php"); ?>
    <body>
        <?php include("menu.php"); ?>

        <div class="row">
            <form method="post" action="../controller/controllerCreateCarro.php" id="form" name="form" class="col-10">
                <div class="form-group">
                    <input class="form-control" type="text" id="marca" name="marca" placeholder="marca do carro" required autofocus>
                    <input class="form-control" type="text" id="modelo" name="modelo" placeholder="modelo do carro" required>
                    <input class="form-control" type="text" id="cor" name="cor" placeholder="cor do carro" required>                    
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-sucess" id="cadastrar">Cadastrar Carro</button> 
                </div>            
            </form>   
        </div>

        
    </body>

</html>