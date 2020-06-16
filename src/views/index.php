<?php require_once("../controllers/controllerListCarro.php");?>
<!DOCTYPE html>
<html lang="pt-br">
    <?php include("head.php"); ?>    
    <body>
        <?php include("menu.php"); ?>

        <table class="table">
            <thead>
                <tr>
                    <th>Chassi</th>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Cor</th>
                </tr>
            </thead>
            <tbody>
                <?php new ControllerListCarro(); ?>
            </tbody>
        </table>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

    </body>
</html>