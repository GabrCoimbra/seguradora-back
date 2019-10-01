<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require_once 'model/cadastro.php';

$dados = array();
if ($_GET['id']) {
    $id=$_GET['id'];
    $retorno = excluir($id);
    if($retorno){
        echo json_encode('Excluido com sucesso');
    }
    else{
        echo json_encode('erro ao excluir');
    }
}

