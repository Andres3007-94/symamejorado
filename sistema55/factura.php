<!DOCTYPE html>
<?php
 require 'funciones.php';
 if(isset($_POST['boleta']))
 {
 	echo $_POST['boleta'];
 	validarfactura($_POST['boleta']);
 
 	
 }

  ?>
<html>
<head>
	<title>insertar boleta</title>
</head>
<body>
	
	<form action="factura.php" method="post">
 <h1>ingrese boleta</h1>
 <input type="text" value="" name='boleta' />

 <input type="submit" value="Buscar"  />
</form>

</body>
</html>