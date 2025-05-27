<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "incuap-cotxes";

// Create a connection
$conn = mysqli_connect($host, $user, $password, $database);
$conn->set_charset("utf8mb4");


// Check the connection
if (!$conn) {
    die("Failed connection to database: " . mysqli_connect_error());
}

// Get all the cars from DB
$result = $conn->query("SELECT * FROM furgonetes");

// Check that there are results
if ($result->num_rows > 0) {

    $cotxes = [];

    // Store all cars in an array
    for ($i = 0; $i<$result->num_rows; $i++){

        $row = $result->fetch_assoc();

        $cotxes[] = [
            "id" => $row["id"],
            "fabricant" => $row["fabricant"],
            "model" => $row["model"],
            "color" => $row["color"],
            "any" => $row["any"],
            "fotos" => $row["fotos"]
            "descripcio" => $row["descripcio"],
            "preu" => $row["preu"]
        ];

    }
}

//Close connection
mysqli_close($conn);

?>