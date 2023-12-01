<?php

$filecontent = file_get_contents("todo-list.json");

$list = json_decode($filecontent, true);

if (isset($_POST['task'])) {
    $newtask = $_POST['task'];
    array_push($list, $newtask);
    file_put_contents('todo-list.json', json_encode($list));
}

header('Content-Type: application/json');

echo json_encode($list);
?>