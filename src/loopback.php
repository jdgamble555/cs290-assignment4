<?php

$method = $_SERVER['REQUEST_METHOD'];

if ($method == 'DELETE' || $method == 'PUT') die;

$params = ${'_'.$method};

if (empty($params)) $params = null;

foreach ($params as $k => $v)
    if (!$params[$k]) $params[$k] = undefined;

header('Content-type: application/json');
echo json_encode(array("Type" => $method, "parameters" => $params));
?>