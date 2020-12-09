<!--
 *
 * Silvina Páez
 *-->
<?php
require "config/constants.php";
$servername = HOST;
$username = USER;
$password = PASSWORD;
$db = DATABASE_NAME;
// Crear conexión
$con = mysqli_connect($servername, $username, $password,$db);
// Verificar la conexión
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>