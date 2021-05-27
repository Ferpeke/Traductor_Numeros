<?php

  require_once '../app/conexion.php';
  $conexion = conexion();

  $color = $_POST['color_seleccionado'];

  if(validar_si_exixte_color_espaniol($color) == 1) {

    $sql = "SELECT nombre_color_ingles FROM t_colores WHERE nombre_color_espaniol = '$color'";

    $result = mysqli_query($conexion, $sql);

    $color_seleccionado = mysqli_fetch_array($result);


    echo $color_seleccionado['nombre_color_ingles'];

  } else if (validar_si_exixte_color_ingles($color) == 1) {


    $sql = "SELECT nombre_color_espaniol FROM t_colores WHERE nombre_color_ingles = '$color'";

    // $respuesta = mysqli_query($conexion, $sql);
    $result = mysqli_query($conexion, $sql);

    $color_seleccionado = mysqli_fetch_array($result);
    
    echo $color_seleccionado['nombre_color_espaniol'];
  } else {
    echo "0";
  }
  
  function validar_si_exixte_color_espaniol($color){
    
    $conexion = conexion();

    $sql = "SELECT * FROM t_colores WHERE nombre_color_espaniol='$color'";

    $result = mysqli_query($conexion, $sql);

    if(mysqli_num_rows($result) > 0){
      return 1;
    } else {
      return 0;
    }
  }

  function validar_si_exixte_color_ingles($color){
    
    $conexion = conexion();

    $sql = "SELECT * FROM t_colores WHERE nombre_color_ingles='$color'";

    $result = mysqli_query($conexion, $sql);

    if(mysqli_num_rows($result) > 0){
      return 1;
    } else {
      return 0;
    }


  }

  function convertir_espaniol_a_ingles(){
    
  }

  



  
?>