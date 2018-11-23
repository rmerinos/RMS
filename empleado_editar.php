<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
</head>

<body>
<p>Mantenimiento Empleado</p>
<p>Editar empleado</p>

<?php
// 1. Recuperar la info
$x = $_REQUEST['chr_emplcodigo'];
// 2. conectar la BD
//require_once "funciones.php";
//$link = conectarBD();
include("conexion.php");
// 3. Armar la consulta
$sql = "select chr_emplcodigo, vch_emplnombre,
            vch_emplpaterno, vch_emplmaterno, vch_emplusuario, vch_emplciudad
            from empleado where chr_emplcodigo=$x";
//print $consulta;
// 4. Ejecutar la consulta
//$resultado = mysql_query($consulta, $link) //or die(mysql_error($link));

$resultado = $cn->query($sql);

// 5. Recuperar la info
$idempleado = mysqli_result($resultado, 0, "chr_emplcodigo");
$nombre = mysqli_result($resultado, 0, "vch_emplnombre");
$apellido = mysqli_result($resultado, 0, "vch_emplpaterno");
$dni = mysqli_result($resultado, 0, "vch_emplmaterno");
$telefono = mysqli_result($resultado, 0, "vch_emplusuario");
$contrato = mysqli_result($resultado, 0, "vch_emplciudad");



?>
<form id="form1" name="form1" method="post" action="empleado_modificar.php">
  <table width="300" height="101" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <td>Id cliente:</td>
      <td><label>
        <input type="text" name="idempleado" id="textfield" value="<?php echo $idempleado; ?>" readonly="readonly"/>
      </label></td>
    </tr>
    <tr>
      <td>Nombre:</td>
      <td><label>
        <input type="text" name="nombre" id="textfield2" value="<?php echo $nombre; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Apellido:</td>
      <td><label>
        <input type="text" name="apellido" id="textfield3" value="<?php echo $apellido; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>DNI:</td>
      <td><label>
        <input type="text" name="dni" id="textfield4" value="<?php echo $dni; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Telefono:</td>
      <td><label>
        <input type="text" name="telefono" id="textfield5" value="<?php echo $telefono; ?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Contrato:</td>
      <td><label>
        <input type="text" name="contrato" id="textfield6" value="<?php echo $contrato; ?>"/>
      </label></td>
    </tr>

   
    <tr>
      <td colspan="2">
        <input type="submit" name="button" id="button" value="Guardar" />
        <input type="button" name="regresar" value="Regresar" onclick="window.location='index.php'"/>
      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
</body>
</html>