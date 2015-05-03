<?php

$params = ${'_'.$_SERVER['REQUEST_METHOD']};

if (empty($params)) $params = null;

foreach ($params as $k => $v)
    if (!$params[$k]) $params[$k] = undefined;

echo json_encode(array("Type" => $_SERVER['REQUEST_METHOD'], "parameters" => $params));
?>