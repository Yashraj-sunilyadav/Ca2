<?php
header('Content-Type: application/json');

$response = [
    "labels" => ["10am", "12pm", "14pm", "16pm", "18pm", "20pm", "22pm"],
    "data" => [10, 150, 180, 20, 170, 190, 160]
];

echo json_encode($response);
?>
