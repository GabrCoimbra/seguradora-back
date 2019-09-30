<?php
 header('Access-Control-Allow-Origin: *');
 header("Access-Control-Allow-Credentials: true");
 header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
 header('Access-Control-Max-Age: 1000');
 header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

require_once 'model/cadastro.php';

$json = file_get_contents('php://input');
$obj  = json_decode($json, true);
if(cadastrar($obj)){
    echo json_encode('Cadastrado com sucesso');
}
else{
    echo json_encode('Não funcionou');
}

