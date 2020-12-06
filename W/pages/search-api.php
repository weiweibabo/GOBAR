<?php
include __DIR__ . '/../../parts/config.php';

$output = [
    'success' => false,
];

if (empty($_POST['shop'])) {
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}
