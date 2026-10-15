<?php
$mysqli = new mysqli('localhost', 'kaiman_sistema', 'kaiman_sistema', 'kaiman_sistema');
if ($mysqli->connect_error) {
    die('Error de conexión: ' . $mysqli->connect_error);
}
$result = $mysqli->query("SELECT @@sql_mode as modo");
$row = $result->fetch_assoc();
echo "<pre>";
print_r($row);
echo "</pre>";
?>
