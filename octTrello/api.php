<?php
header("Content-Type: application/json");

// Path to your data file
$dataFile = 'data.json';

// Check if file exists
if (file_exists($dataFile)) {
    // Read the file contents
    $data = file_get_contents($dataFile);
    
    // Convert JSON data to PHP array
    $dataArray = json_decode($data, true);
    
    // Output the data as JSON
    echo json_encode($dataArray);
} else {
    // File not found
    http_response_code(404);
    echo json_encode(["error" => "File not found"]);
}
?>
