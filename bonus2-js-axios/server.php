<?php

include __DIR__ . '/models/db.php';

header('Content-Type: application/json');

echo json_encode($movies);
