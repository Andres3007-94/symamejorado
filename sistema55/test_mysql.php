<?php
$conexion = mysqli_connect("localhost", "wp384", "-3jB8S711wh[!p(.", "wp384");
if ($conexion) {
  echo "✅ Conectado correctamente a la BD del WordPress";
} else {
  echo "❌ Error de conexión: " . mysqli_connect_error();
}
?>
