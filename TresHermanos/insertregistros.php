<?php
include 'Conexion.php';



$Nombre = $_POST['nombre'];
$Email1 =$_POST['email'];
$Mensaje =$_POST['mensaje'];


$total = mysqli_num_rows(mysqli_query($conexion,"SELECT * FROM datos WHERE email='$Email1'")); //Comprobar si ya está registrado el usuario

    if($total==0){


            $sql = "INSERT INTO datos(nombre, email, mensaje) 
                    VALUES ('$Nombre','$Email1','$Mensaje')";

            $resultado=mysqli_query($conexion,$sql);

            if(!$resultado){
                $var = "Error de registro";
                echo "<script> alert('".$var."'); </script>";
                echo '<meta http-equiv="Refresh" content="0;URL=../TresHermanos/indexTresHermanos.html">';
            }else{
                $var = "Registrado exitosamente";
                echo "<script> alert('".$var."'); </script>";   
                echo '<meta http-equiv="Refresh" content="0;URL=../TresHermanos/indexTresHermanos.html">';
                
            }
    }else{
        echo '<meta http-equiv="Refresh" content="0;URL=../TresHermanos/indexTresHermanos.html">';
        $var = "Usuario ya registrado";
        echo "<script> alert('".$var."'); </script>";
    }

?>