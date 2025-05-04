<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $projectName = $_POST['projectName'];
    $description = $_POST['description'];
    $energySaves = (int)$_POST['energySaves'];
    $status = $_POST['status'];
    $place = $_POST['place'];
    $energyType = $_POST['energyType'];

    $file = 'projects.json';
    if (file_exists($file)) {
        $projects = json_decode(file_get_contents($file), true);
    } else {
        $projects = [];
    }

    $newProject = [
        "id" => uniqid(),
        "project_name" => $projectName,
        "description" => $description,
        "energy_saves" => $energySaves,
        "status" => $status,
        "place" => $place,
        "energy_type" => $energyType,
        "created_at" => date("Y-m-d H:i:s")
    ];

    $projects[] = $newProject;

    file_put_contents($file, json_encode($projects, JSON_PRETTY_PRINT));

    echo "Project added successfully!";
}
?>
