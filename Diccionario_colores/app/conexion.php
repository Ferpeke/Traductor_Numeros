<?php
  

   function conexion(){
      $conexion = new mysqli('localhost', 'root', 'Nandodrago4', 'bd_colores', 33061);
      //$conexion = new mysqli('localhost', 'root', '', 'tecmilpa_preregistro');
      if($conexion->connect_errno){
        echo 'Error en la conexion al modelo '.$conexion->connect_error;
      }
      $conexion->set_charset("utf8");//sin guin medio
      return $conexion;
    }
  
?>