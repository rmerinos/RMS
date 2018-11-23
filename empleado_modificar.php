<?php
// empleado_modificar.php


// 1.Recuperar la info
$idempleado = $_REQUEST['chr_emplcodigo'];
$nombre = $_REQUEST['vch_emplnombre'];
$apellido = $_REQUEST['vch_emplpaterno'];
$dni = $_REQUEST['vch_emplmaterno'];
$telefono = $_REQUEST['vch_emplusuario'];
$contrato = $_REQUEST['vch_emplciudad'];


// 2. Armar la consulta
$consulta = "UPDATE empleado SET vch_emplnombre='$nombre', vch_emplpaterno='$apellido', vch_emplmaterno='$dni', vch_emplusuario='$telefono', vch_emplciudad='$contrato' WHERE chr_emplcodigo=$idempleado";

// 3. Conectar BD
include("conexion.php");
//require_once "conexion.php";
//$link = conectarBD();

$resultado = $cn->query($consulta);

// 4. Ejecutar la consulta
//$resultado = mysql_query($consulta, $link) or die (mysql_error($link));
//if($resultado){
 // print "Se actualiz� correctamente. <a href=\"empleado_buscar.php\">Regresar</a>";


?>

