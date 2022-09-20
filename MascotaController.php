<?php
include "MascotaModel.php";
$nuevaMascota = new Mascota();

/*GUARDAR*/
if(isset($_POST['btnGuardar']))
{
    $nuevaMascota->GuardarMascota($_POST['nombre']);
    header('Location: AgregarMascota.php');
}
else
if(isset($_POST['btnEditar']))
{
    $nuevaMascota->EditarMascotas($_POST['idMasc'],$_POST['txtnombre']); 
 header('Location: AgregarMascota.php');
        
}
/*EDITAR*/
if(isset($_POST['btnEliminar']))
{
    $nuevaMascota->EliminarMascotas($_POST['idStudent'],$_POST['txtapellidos'],$_POST['txtnombre'],$_POST['direccion'],$_POST['telefono']); 
 header('Location: AgregarMascota.php');
        
}