<?php ?>

<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "incuap-cotxes";

// Crear una conexión
$conn = mysqli_connect($host, $user, $password, $database);

// Comprobar la conexión
if (!$conn) {
    die("Failed connection: " . mysqli_connect_error());
}

echo "Connection successful";

// Cerrar la conexión
// mysqli_close($conn);

?>