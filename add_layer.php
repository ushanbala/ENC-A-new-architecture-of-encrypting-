<?php
include 'connection.php';
// Check if data is received via POST request
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get the JSON data from the request body
    $json_data = file_get_contents("php://input");
    
    // Decode the JSON data
    $data = json_decode($json_data, true);
    // Check if decoding was successful
    if ($data !== null) {
        $id = $data["id"];
        $layer = $data["layer"];
        Database::iud("INSERT INTO `layers` (`model_id`,`key`) VALUES('".$id."','".$layer."');");
        echo "done";
    } else {
        // Print an error message if decoding fails
        echo "Error decoding JSON data.\n";
    }
} else {
    // Print an error message if the request method is not POST
    echo "This endpoint only accepts POST requests.\n";
}

?>
