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

// Get all the vehicles from DB
$result = $conn->query("SELECT * FROM vehicles");

// Check that there are results
if ($result->num_rows > 0) {

    $vehicles = [];

    // Store all vehicles in an array
    for ($i = 0; $i<$result->num_rows; $i++){

        $row = $result->fetch_assoc();

        $vehicles[] = [
            "id" => $row["id"],
            "make" => $row["make"],
            "model" => $row["model"],
            "color" => $row["color"],
            "year" => $row["year"],
            "kms" => $row["kms"],
            "numPlate" => $row["numPlate"],
            "fuel" => $row["fuel"],
            "doors" => $row["doors"],
            "numPlateDate" => $row["numPlateDate"],
            "transmission" => $row["transmission"],
            "displacement" => $row["displacement"],
            "hp" => $row["hp"],
            "guarantee" => $row["guarantee"],
            "equipment" => $row["equipment"],
            "pics" => str_replace(['[', ']', '"'], '', $row["pics"]),
            "description" => $row["description"],
            "price" => $row["price"]
        ];
    }
}

//Close connection
mysqli_close($conn);

?>