<?php
if(isset($_POST["submit"])) {
//capturar los datos
$arreglo=$_POST["datos"];
//generar codigo
include("conexion.php");
$sql="SELECT  LPAD(chr_emplcodigo+1,4,'0') FROM empleado ORDER BY chr_emplcodigo DESC LIMIT 0,1";
$rs=mysqli_query($sql,$cn);
$fila=mysqli_fetch_array($rs);
$cod=$fila[0];   //Entrega el codigo
$sql="insert into empleado values('$cod','$arreglo[0]','$arreglo[1]','$arreglo[2]','$arreglo[3]','$arreglo[4]','$arreglo[5]','$arreglo[6]','1','$cod.jpg')";
mysqli_query($sql,$cn);
mysqli_close($cn);
//redireccionar a index.php  (listado)
?>
<script language="javascript">
   location.href="index.php";
</script>
<?php
}
?>
<!doctype html>
<html>
 <head>
        <meta charset="UTF-8">
        <title>Insertar Empleados</title>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
<body>
<h1>Insertar Empleados</h1>
 <form id="form1" name="form1" method="post" action="">
   <table width="50%" border="1" cellspacing="2" cellpadding="1">
     <tbody>
       <tr>
         <th colspan="2" scope="col">INGRESO DE DATOS</th>
       </tr>
       <tr>
         <td width="29%">Apellido Paterno</td>
         <td width="71%"><input name="datos[]" type="text" autofocus="autofocus" required="required" id="datos[]"></td>
       </tr>
       <tr>
         <td>Apellido Materno</td>
         <td><input name="datos[]" type="text" required="required" id="datos[]"></td>
       </tr>
       <tr>
         <td>Nombres</td>
         <td><input name="datos[]" type="text" required="required" id="datos[]"></td>
       </tr>
       <tr>
         <td>Ciudad</td>
         <td><input name="datos[]" type="text" required="required" id="datos[]"></td>
       </tr>
       <tr>
         <td>Dirección</td>
         <td><input name="datos[]" type="text" required="required" id="datos[]"></td>
       </tr>
       <tr>
         <td>Usuario</td>
         <td><input name="datos[]" type="text" required="required" id="datos[]"></td>
       </tr>
       <tr>
         <td>Clave</td>
         <td><input name="datos[]" type="text" required="required" id="datos[]"></td>
       </tr>
       <tr>
         <td colspan="2" align="center"><input type="submit" name="submit" id="submit" value="Enviar"></td>
       </tr>
     </tbody>
   </table>
 </form>
 <p>&nbsp;</p>
</body>
</html>