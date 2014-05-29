<?php

$rut=$_POST['rut'];
$conexion=mysql_connect('localhost','root','');

mysql_select_db("adw",$conexion);
$sql="delete FROM adw.tb_users WHERE rut='$rut'";
mysql_query($sql);

?>
