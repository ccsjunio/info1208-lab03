<?php

define("_ROOTFOLDER",$_SERVER['DOCUMENT_ROOT']);

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        http_response_code(200);
        require __DIR__ . '/views/index.php';
        break;
    case '' :
        http_response_code(200);
        require __DIR__ . '/views/index.php';
        break;
    case '/carlos_ferraz_output' :
        http_response_code(200);
        require __DIR__ . '/views/carlos_ferraz_output.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}

?>