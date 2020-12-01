<?php
require __DIR__ . '/../parts/config.php';
header('Content-Type: application/json');
//echo json_encode($_FILES);
$output = [
    'img' => '',
    'error' => '只接受 jpeg 圖檔'
];

if (empty($_FILES['avatar']) or $_FILES['avatar']['type'] !== 'image/jpeg') {
    $output['ori'] = $_FILES;
    echo json_encode($output, JSON_UNESCAPED_UNICODE);
    exit;
}

move_uploaded_file($_FILES['avatar']['tmp_name'], __DIR__ . '/M/uploads/' . $_FILES['avatar']['name']);
$output['img'] = WEB_ROOT . '/M/uploads/' . $_FILES['avatar']['name'];
$output['error'] = '';

echo json_encode($output, JSON_UNESCAPED_UNICODE);
