<?php
include("conexion.php");

if(isset($_POST['register'])){ 
 if(
    strlen($_POST['usuario'] )>= 1 &&
    strlen($_POST['nombre'] )>= 1 &&
    strlen($_POST['correo'] )>= 1 &&
    strlen($_POST['contacto'] )>= 1 &&
    strlen($_POST['direccion'] )>= 1 
) {
     $usuario = trim($_POST['usuario']);
     $nombre = trim($_POST['nombre']);
     $correo = trim($_POST['correo']);
     $contacto = trim($_POST['contacto']);
     $direccion = trim($_POST['direccion']);
     $consulta="INSERT INTO datos(usuario, nombre, correo, contacto, direccion)
     VALUES('$usuario','$nombre', '$correo', '$contacto', '$direccion')";
     $resultado=mysqli_query($conex, $consulta);
     if($resultado){
        ?>
        <h3 class="success">tu registro se a completado</h3><?php
     } else {
        ?>
        <h3 class="error">llena todos los campos</h3>
        <?php
        }
        } else {
        ?>
        <h3 class="error">Ocurrio un error</h3>
        <?php 
     }
 }

?>