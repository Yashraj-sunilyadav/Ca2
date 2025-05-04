<?php
header('Content-Type: application/json');

$response = [
    "labels" => ["Jan", "Feb", "Mar", "Apr", "Jun", "Jul", "Aug"],
    "data" => [123, 451, 802, 623, 421, 820, 290]
];

echo json_encode($response);
?>
