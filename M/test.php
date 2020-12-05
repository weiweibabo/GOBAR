<?php
require __DIR__. '/../parts/config.php';

$stmt = $pdo->query("SELECT * FROM shop WHERE name LIKE '%＄_keywordinput%'");

$row = $stmt->fetchall();

echo json_encode($row,JSON_UNESCAPED_UNICODE);