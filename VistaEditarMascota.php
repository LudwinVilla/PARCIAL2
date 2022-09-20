<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VistaEditarEstudiante</title>
</head>
<body>
    <form action=" MascotaController.php" method="POST">
                        <?php
                            include_once "MascotaModel.php";
                            $nuevaMascota = new Mascota();
                            /*FILTRAR AL ESTUDIANTE SEGUN ID ENVIADO*/
                            $resultado = $nuevaMascota->FiltrarMascota($_GET['idEst']);

                            while($resultadoFiltrado = mysqli_fetch_assoc($resultado))
                            {
                        ?>
                                <p>
                                <label for="txtnombre">Nombre:</label>
                                <input type="text" name="txtnombre" 
                                value="<?php echo $resultadoFiltrado['nombre']?>">
                                </p>

                                 <p>
                                    <input type="hidden" name="idMasc" 
                                    value="<?php echo $resultadoFiltrado['IdMascota']?>">
                                 </p>   
                            <?php
                            }
                            ?>
                        
                <input type="submit" value="Editar Estudiante" name="btnEditar">            
    </form>
</body>
</html>