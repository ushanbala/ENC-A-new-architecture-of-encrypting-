<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE');
header('Access-Control-Allow-Headers: Content-Disposition, Content-Type, Content-Length, Accept-Encoding');
header('Content-Type: application/json');
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
        $result = Database::search("SELECT * FROM `model` WHERE `id`='".$id."';");
        $dataz = [];
        while ($row = $result->fetch_assoc()) {
            $dataz[] = $row;
        }
        echo json_encode($dataz);
    } else {
        // Print an error message if decoding fails
        echo "Error decoding JSON data.\n";
    }
} else {
    // Print an error message if the request method is not POST
    echo "This endpoint only accepts POST requests.\n";
}

?>
