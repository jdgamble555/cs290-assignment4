<?php
if (!$_REQUEST) $_REQUEST = null;

foreach ($_REQUEST as $k => $v)
    if (!$_REQUEST[$k]) $_REQUEST[$k] = undefined;

echo json_encode(array("Type" => $_SERVER['REQUEST_METHOD'], "parameters" => $_REQUEST));
?>