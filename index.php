<?php

require_once "./app/controller/desenvolvedorasController.php";

$controller =  new desenvolvedorasController();

$uri_base = "/arthur/mvc_jogos/";
$request_uri = str_replace($uri_base, '', $_SERVER['REQUEST_URI']);

if (substr($request_uri, 0, 1) !== '/') {
    $request_uri = '/' . $request_uri;
}

if ($request_uri == '/index.php') {
    $controller->ShowFormCreateDesenvolvedora();
} elseif ($request_uri == "/desenvolvedora/criar" && $_SERVER['REQUEST_METHOD'] == 'POST') {
    $controller->CreateDesenvolvedora();
} elseif($request_uri == '/desenvolvedora/lista'){
    $controller->ShowAllDesenvolvedoras();
}elseif(){

}elseif(){
    
}
else {
    include "./falback.php";
}
