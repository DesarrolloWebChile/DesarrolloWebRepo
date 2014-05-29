<?php

$rut=$_POST['rut'];
$conexion=mysql_connect('localhost','root','');

mysql_select_db("adw",$conexion);
$comp_sql="select rut FROM adw.tb_users WHERE rut='$rut'";
$result=mysql_query($comp_sql,$conexion);
$strlen=mysql_num_rows($result);
 
if ($strlen>0){
$sql="delete FROM adw.tb_users WHERE rut='$rut'";
mysql_query($sql);
echo "Usuario Eliminado";
}else{
echo "Usuario no existe";
}

?>
