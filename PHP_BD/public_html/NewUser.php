<?php
require("validaRut.php");
require ("conexion.php");

$rut=$_POST['rut'];
$dv=$_POST['dv'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$direccion=$_POST['direccion'];
$comuna=$_POST['comuna'];
$email=$_POST['mail'];
$telefono=$_POST['telefono'];
$sexo=$_POST['sexo'];
$fden=$_POST['fden'];

$Mensaje=validaRut($rut,$dv);
/*echo $Mensaje;*/

if ($Mensaje==1){
    $conexion=conectar_mysql();
    $sql="INSERT INTO adw.tb_users(rut,dv,nombre,apellido,direccion,comuna,email,telefono,sexo,fdenac) VALUES('$rut','$dv','$nombre','$apellido','$direccion','$comuna','$email','$telefono','$sexo','$fden')";
    mysql_query($sql);
    echo"Usuario registrado";
}else{
    echo "RUT incorrecto, ingrese nuevamente los Datos";
}

?>
