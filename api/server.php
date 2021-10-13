<?php
header('Content-Type: application/json');
require __DIR__ . '/../assets/database.php';

echo json_encode($db);
