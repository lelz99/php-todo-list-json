<?php 

$source_path = __DIR__ . '../../database/tasks.json';

$tasks_json = file_get_contents($source_path);

$tasks = json_decode($tasks_json, true);

header('Content-Type: application/json');

echo json_encode($tasks); 
