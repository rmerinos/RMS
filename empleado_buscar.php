<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin t&iacute;tulo</title>
<link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
</head>

<body>
<form id="form1" name="form1" method="post" action="empleado_buscar.php">
  <p>Mantenimiento Empleado</p>
  <table width="459" height="37" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td height="37">Buscar por apellido:</td>
      <td><label>
        <input type="text" name="ape" id="textfield" />
      </label></td>
      <td>
        <input type="submit" name="bus" id="button" value="Buscar" />
        <input type="button" name="nue" value="Nuevo" onclick="window.location='empleado_nuevo.html'"/>
      </td>
    </tr>
  </table>
  <table width="75%" border="1" cellpadding="0" cellspacing="0">
    <tr>
      <th width="23" scope="col">Código</th>
      <th width="102" scope="col">Nombre</th>
      <th width="90" scope="col">Apellido Paterno</th>
      <th width="100" scope="col">Apellido Materno</th>
      <th width="89" scope="col">Usuario</th>
      <th width="115" scope="col">Ciudad</th>
      <th width="133" scope="col">Acciones</th>
    </tr>
<?php
if (isset($_REQUEST['bus'])){
  // 1. Recuperar los datos
  $x = $_REQUEST['ape'];
  // 2. Conectar a la BD
  include("conexion.php");
  //$link = conectarBD();
  // 3. Armar la consulta
  $sql = "select chr_emplcodigo, vch_emplnombre,
            vch_emplpaterno, vch_emplmaterno, vch_emplusuario, vch_emplciudad
            from empleado where vch_emplpaterno like '%$x%'";
  // 4. Ejecutar la consulta
  $resultado = $cn->query($sql);
  
  while($fila = mysqli_fetch_array($resultado)){
     print '<tr>';
     print '<td>'.$fila['chr_emplcodigo'].'</td>';
     print '<td>'.$fila['vch_emplnombre'].'</td>';
     print '<td>'.$fila['vch_emplpaterno'].'</td>';
     print '<td>'.$fila['vch_emplmaterno'].'</td>';
     print '<td>'.$fila['vch_emplusuario'].'</td>';
     print '<td>'.$fila['vch_emplciudad'].'</td>';     
     print '<td><a href="empleado_editar.php?id='.$fila['chr_emplcodigo'].'">Editar</a> - ';
     print '<a href="empleado_eliminar.php?id='.$fila['chr_emplcodigo'].'">Eliminar</a></td>';
     print '</tr>';
  }
}
?>
  </table>
</form>


</body>
</html>