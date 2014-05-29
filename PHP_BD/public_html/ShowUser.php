
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
<?php

require ("conexion.php");

$rut=$_POST['rut'];

$conexion=conectar_mysql();
$sql="SELECT nombre, apellido,direccion, comuna, email, telefono, fdenac FROM adw.tb_users WHERE rut='$rut'";
$result=mysql_query($sql,$conexion);
$strlen=mysql_num_rows($result);

if ($strlen>0){
    echo "<table border='1' align='center'>";
    echo "<tr bgcolor='#CCCCCC'>";
    echo "<td><b>Nombre</b></td>";
    echo "<td><b>Apellido</b></td>";
    echo "<td><b>Dirección</b></td>";
    echo "<td><b>Comuna</b></td>";
    echo "<td><b>Correo</b></td>";
    echo "<td><b>Telefono</b></td>";
    echo "<td><b>Fecha de Nacimiento</b></td>";
    echo "</tr>";
    for($j=0;$j<$strlen;$j++){
    $row=mysql_fetch_row($result);
    echo "<tr>";
    echo "<td>".$row[0]."</td>";
    echo "<td>".$row[1]."</td>";
    echo "<td>".$row[2]."</td>";
    echo "<td>".$row[3]."</td>";
    echo "<td>".$row[4]."</td>";
    echo "<td>".$row[5]."</td>";
    echo "<td>".$row[6]."</td>";
    echo "</tr>";
    }
    echo "</table>";
    mysql_close($conexion);
}
else{
    echo "usuario no existe";
    mysql_close($conexion);
}
?>
