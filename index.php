<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Tabla Empleados</title>
        <link href="../css/estilos.css" rel="stylesheet" type="text/css"/>
        <script language="javascript">
		function insertar(){
			location.href="empleado_nuevo.html";
		}
		</script>
        <script language="javascript">
		function listar(){
			location.href="listar.php";
		}
        </script>
    </head>
    <body>
        <h1>Tabla Empleados</h1>        
        <?php
        include 'botones.php';
        include 'conexion.php';
        //comando
        $sql="Select * from empleado";
        //Ejecutar el comando
        $rs= mysqli_query($cn,$sql);
        ?>
        <table border="1" width="75%">
            <tr>
                <th>Codigo</th>
                <th>Apellido Paterno</th>
                <th>Apellido Materno</th>
                <th>Nombres</th>
                <th>Ciudad</th>
                <th>Usuario</th>
            </tr>
            <?php while($fila=mysqli_fetch_array($rs)) { ?>
            <tr>
                <td><?php echo $fila[0];?></td>
                <td><?php echo $fila[1];?></td>
                <td><?php echo $fila[2];?></td>
                <td><?php echo $fila[3];?></td>
                <td><?php echo $fila[4];?></td>
                <td><?php echo $fila[5];?></td>
            </tr>
            <?php } ?>
        </table>
        <?php
        //cerrar la conexion
        mysqli_close($cn);
        ?>
    </body>
</html>


