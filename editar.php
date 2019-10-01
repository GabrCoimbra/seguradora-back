<?php
//Organizando o cabeçalho para requisições json
 header('Access-Control-Allow-Origin: *');
 header("Access-Control-Allow-Credentials: true");
 header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
 header('Access-Control-Max-Age: 1000');
 header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');
//Incluindo a model de cadastro
require_once 'model/editar.php';
//recebendo o json enviado pela API
$json = file_get_contents('php://input');

//Transformando o json em array
$obj  = json_decode($json, true);

if (!empty($obj)) {
    //Enviando os parametros para a função
    $retorno = editar($obj);
}
//Verifica se foi cadastrado
if ($retorno) {
    echo json_encode('Cadastrado com sucesso');
} else {
    echo json_encode('Não funcionou');
}
