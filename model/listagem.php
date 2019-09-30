<?php
//Incluindo a conexão com o banco
require_once './conn/conexao.php';

$database = new Database();
$db = $database->conexao();
var_dump($db);die();
    function listar()
    {
        global $db;
        $query="Select * from tb_calculo";
        $teste = $db->query($query);
        var_dump($teste);
        $retorno = mysqli_fetch_all($teste);
        return $teste;
    }
