<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("b6wpbxt5sqwghjx7uozl-mysql.services.clever-cloud.com","uhkrxpo3bms7eqrh","9LKBiFYChhCmbEHEyeCz","b6wpbxt5sqwghjx7uozl");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }