<?php

function conectar_mysql(){
    $host='localhost';
    $usuario='root';
    $pass='';
    $db='adw';     
    $con = mysql_connect($host,$usuario,$pass);
    if(!$con){
        die ("ERROR AL CONECTAR MYSQL:".mysql_error());
        }
    $bd = mysql_select_db($db, $con);
     if (!$bd ){die ("ERROR AL CONECTAR CON LA BASE DE DATOS: ".mysql_error() );}
     return $con;
}
?>