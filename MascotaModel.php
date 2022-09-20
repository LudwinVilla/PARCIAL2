<?php
include_once "conexion.php";


class Mascota
{
    private $IdMascota;
    private $Nombre;
    
    public function GuardarMascota($id,$nom)
    {
       /*CONEXION A LA BASE DE DATOS*/ 
       $nuevaConexion = new conexion();
       $ComandoConexion = $nuevaConexion->Conectar();
       $ComandoConexion->query("insert into mascota (IdMascota,Nombre) values ("."'".$_POST['IdMascota']."','".$_POST['Nombre']."')");

       if(!$ComandoConexion)
       {
        echo "Ocurriò un error al insertar el registro....".mysqli_error($ComandoConexion);
       }
       /*echo "Registro agregado exitosamente";*/
       header("Location: VistaEstudiante.php");
    }
    public function ListarMascotas()
    {
      $OtraConexion = new conexion();
      $nuevoComando = $OtraConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from mascota");
      if(!$resultado)
      {
        echo "Error Al intentar realizar Consulta de Mascotas...".mysqli_error($nuevoComando);
      } 
      return $resultado;
      
    }

    public function FiltrarMascotas($id)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $resultado = $nuevoComando->query("Select * from mascota where idEstudiante=$id");
      return $resultado;
    }

    public function EditarMascota($id,$nom)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("Update mascota set nombre="."'".$nom."'"." where IdMascota = $id");
    }

    public function EliminarMascotas($id,$nom)
    {
      $nuevaConexion = new conexion();
      $nuevoComando = $nuevaConexion->Conectar();
      $nuevoComando->query("DELETE FROM  mascota where idEstudiante=$id");

}
}