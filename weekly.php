<?php
header('Content-Type: application/json');

$response = [
    "labels" => ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "sun"],
    "data" => [100, 150, 190, 20, 110, 90, 110]
];

echo json_encode($response);
?>
