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

$query = "SELECT * FROM cotxes WHERE id=" . $carId;

// Get all the cars from DB
$result = $conn->query($query);

// Check that there are results
if ($result->num_rows > 0) {

    // Store all cars in an array

    $row = $result->fetch_assoc();

    $cotxe = [
        "id" => $row["id"],
        "fabricant" => $row["fabricant"],
        "model" => $row["model"],
        "color" => $row["color"],
        "any" => $row["any"],
        "fotos" => $row["fotos"],
        "descripcio" => $row["descripcio"],
        "kms" => $row["kms"]
    ];

}

//Close connection
mysqli_close($conn);

?>