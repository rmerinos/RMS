<?php
// Este es el archivo empleado_insertar.php

// Paso 1. Recuperar la informacion del formulario
$n = $_REQUEST['nom'];
$a = $_REQUEST['ape'];
$d = $_REQUEST['dni'];
$t = $_REQUEST['tel'];
$c = $_REQUEST['con'];
$s = $_REQUEST['sed'];

// Paso 2. Conectar a la BD
include("conexion.php");
//$cn = conectarBD();
//$rs=mysqli_query($sql,$cn);
// Paso 3. Escribir la sentencia
$sql = "INSERT INTO empleado (chr_emplcodigo, vch_emplpaterno, vch_emplmaterno, vch_emplnombre, vch_emplciudad, vch_empldireccion, vch_emplusuario, vch_emplclave, chr_emplestado, chr_emplfoto) VALUES ('$d', '$a', '$c', '$n', '$s', NULL, '$t', '12345', '1', NULL)";

if ($cn->query($sql) === TRUE) {
    echo "Empleado! Se inserto correctamente. <a href=\"empleado_buscar.php\">Regresar</a>";
} else {
    echo "Error: " . $sql . "<br>" . $cn->error;
}

$cn->close();
// Paso 4. Ejecutar la sentencia


?>