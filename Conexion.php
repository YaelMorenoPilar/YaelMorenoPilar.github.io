<?php

$conexion= mysqli_connect("localhost","root","","mezcalino");

if(!$conexion)
      
{
    echo '<script type="text/javascript">
    alert("Hubo un error al conectar a la base de datos ");
    </script>;';
}
?>