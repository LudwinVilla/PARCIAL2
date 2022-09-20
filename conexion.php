<?php

    class conexion 
    {
        function Conectar()
        {
          $mysqli = new mysqli("bkvh9x4nmmmmwptyuwnw-mysql.services.clever-cloud.com","upvbhvhswczrgwn3","T1SYmuu6DtrUiEEBN3GB","bkvh9x4nmmmmwptyuwnw");
          
          if($mysqli->connect_errno)
          {
            echo "Error Al conectar a la Base de datos   ".$mysqli->connect_errno;
          } 
          return $mysqli; 
        }
    }