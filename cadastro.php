<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require_once 'model/cadastro.php';

$json = file_get_contents('php://input');
$obj  = json_decode($json, true);
echo json_decode($obj);
