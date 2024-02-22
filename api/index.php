<?php 
header('Content-Type: application/json');
$source_path = __DIR__ . '../../database/tasks.json';

$tasks_json = file_get_contents($source_path);

$tasks = $tasks_json;

$add_task = $_POST['task'] ?? '';

if($add_task){

    $tasks = json_decode($tasks_json, true);

    $tasks[]= ['id' => uniqid(), 'text' => $add_task, 'done' => false];

    $tasks = json_encode($tasks); 

    file_put_contents($source_path, $tasks);

} 

echo $tasks;
