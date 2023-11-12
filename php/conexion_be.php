<?php

  $conexion = mysqli_connect("localhost","Localhost via UNIX socket","123456789Ac@","id21441139_bdsantarosa");

  
  if($conexion){

    echo 'Conexion Exitosa';


  }
  else{

    echo 'fail';
  }

  


?>