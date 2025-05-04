<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $labels = [
        $_POST['label1'],
        $_POST['label2'],
        $_POST['label3'],
        $_POST['label4'],
        $_POST['label5']
    ];

    $data = [
        (int)$_POST['data1'],
        (int)$_POST['data2'],
        (int)$_POST['data3'],
        (int)$_POST['data4'],
        (int)$_POST['data5']
    ];

    $newContent = "<?php\nheader('Content-Type: application/json');\n\n";
    $newContent .= '$response = ' . var_export([
        "labels" => $labels,
        "data" => $data
    ], true) . ";\n\necho json_encode(\$response);\n?>";

    file_put_contents('main_chart.php', $newContent);

    echo <<<HTML
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Successful</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta http-equiv="refresh" content="3;url=index.html" />
</head>
<body class="bg-green-50 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-xl rounded-2xl p-8 text-center max-w-md">
        <h2 class="text-2xl font-bold text-green-600 mb-4">✅ Update Successful!</h2>
        <p class="text-gray-600 mb-2">Energy distribution data has been updated.</p>
        <p class="text-sm text-gray-400">Redirecting to homepage in 3 seconds...</p>
        <a href="index.html" class="inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">Go Now</a>
    </div>
</body>
</html>
HTML;
}
?>