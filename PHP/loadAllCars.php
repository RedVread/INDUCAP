<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "incuap-cotxes";

// Create a connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check the connection
if (!$conn) {
    die("Failed connection to database: " . mysqli_connect_error());
}

$result = $conn->query("SELECT * FROM cotxes");

if ($result->num_rows > 0) {

    $cotxes = [];

    for ($i = 0; $i<$result->num_rows; $i++){

        $row = $result->fetch_assoc();

        $cotxes[] = [
            "fabricant" => $row["fabricant"],
            "model" => $row["model"],
            "color" => $row["color"],
            "any" => $row["any"],
            "fotos" => $row["fotos"]
        ];

    }
}

//Cerrar la conexión
mysqli_close($conn);

?>