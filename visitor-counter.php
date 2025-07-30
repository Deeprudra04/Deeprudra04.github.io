<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header('Access-Control-Allow-Headers: Content-Type');

// File to store the visitor count
$countFile = 'visitor_count.txt';

// Handle GET request (get current count)
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $count = 0;
    if (file_exists($countFile)) {
        $count = (int)file_get_contents($countFile);
    }
    
    echo json_encode([
        'success' => true,
        'count' => $count
    ]);
}

// Handle POST request (increment count)
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $count = 0;
    if (file_exists($countFile)) {
        $count = (int)file_get_contents($countFile);
    }
    
    $count++;
    
    // Save the new count
    file_put_contents($countFile, $count);
    
    echo json_encode([
        'success' => true,
        'count' => $count
    ]);
}
?> 