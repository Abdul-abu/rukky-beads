<?php
header('Content-Type: application/json');
$file = 'data/likes.json';
$likes = file_exists($file) ? json_decode(file_get_contents($file), true) : [];

$data = json_decode(file_get_contents('php://input'), true);
$vid = $data['videoId'];

if(!isset($likes[$vid])) $likes[$vid] = 0;
$likes[$vid]++;

file_put_contents($file, json_encode($likes));
echo json_encode(['likes' => $likes[$vid]]);
?>