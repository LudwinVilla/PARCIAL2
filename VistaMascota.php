<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    </form>
    <hr>
    <h3>LISTADO DE MASCOTAS</h3>
    <hr>
    <table border="1">
        <th>IdMascota</th>
        <th>Mascota</th>
        <th colspan="2">OPERACIONES</th>
    <?php
        include_once "MascotaModel.php";
        $Mascota = new Mascota ();
        $ListaMascotas = $Mascota->ListarMascotas();
        while($Mascotas = mysqli_fetch_assoc($ListaMascotas))
        {?>
          <tr>
                <td>  <?php echo $Mascotas['IdMascota'] ?> </td>
                <td>  <?php echo $Mascotas['Nombre'] ?> </td>
                <td><a href="VistaEditarMascota.php?idEst=<?php echo $Mascota['IdMascota'];?>">EDITAR</a></td>
                <td><a href="VistaEditarVacuna.php?idEst=<?php echo $Mascota['IdVacuna'];?>">Eliminar</a></td>
          </tr>
          
       <?php } ?>
    
    </table>
</body>
</html>