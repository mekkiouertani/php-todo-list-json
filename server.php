<?php

$filecontent = file_get_contents("todo-list.json");

$list = json_decode($filecontent, true);

//aggiunge un elemento alla lista
if (isset($_POST['task'])) {
    $newtask = [
        "name" => $_POST['task'],
        "done" => false
    ];
    array_push($list, $newtask);
    file_put_contents('todo-list.json', json_encode($list));
}

//cambia lo stato di un elemento della lista
if (isset($_POST['index'])) {
    $list[$_POST['index']]['done'] = !$list[$_POST['index']]['done'];
    file_put_contents('todo-list.json', json_encode($list));
}

//elimina un elemento dalla lista
if (isset($_POST['deleteIndex'])) {
    array_splice($list, $_POST['deleteIndex'], 1);
    file_put_contents('todo-list.json', json_encode($list));
}


header('Content-Type: application/json');

echo json_encode($list);
?>