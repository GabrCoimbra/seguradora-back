<?php
//Incluindo a conexão com o banco
require_once './conn/conexao.php';

$database = new Database();
$db = $database->conexao();
    function cadastrar($dados){
        $sql = 'insert into tb_calculos'.$dados;
        $envia = $db->query($query);
        return $envia;
    }