<?php
header('Content-type: application/json; charset="utf-8"');
$config = ['metodos' => ['GET', 'POST', 'PUT', 'DELETE'],
           'paginas' => ['list.php', 'insert.php', 'edit.php', 'exclude.php']];
$metodo = $_SERVER['REQUEST_METHOD'];

if(!in_array($metodo, $config['metodos']))
    die(json_encode(['erro' => "Método de acesso inválido"]));
else
    include $config['paginas'][array_search($metodo,$config['metodos'])];