<?php
require __DIR__. '/../parts/config.php';

$stmt = $pdo->query("SELECT * FROM shop");

$row = $stmt->fetch();

echo json_encode($row,JSON_UNESCAPED_UNICODE);