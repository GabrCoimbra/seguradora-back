<?php
//Incluindo a conexão com o banco
require_once './conn/conexao.php';

$database = new Database();
$db = $database->conexao();
    function cadastrar($dados){
        global $db;
        $sql = 'insert into tb_calculo values(
            null,
            "Jorge",
            "m",
            "1997-05-29",
            "ford",
            "ka",
            1
            )';
        $envia = $db->query($sql);
        return $envia;
    }