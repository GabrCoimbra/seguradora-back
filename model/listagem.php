<?php
//Incluindo a conexão com o banco
require_once './conn/conexao.php';

$database = new Database();
$db = $database->conexao();
    function listar(){
        global $db;
        $query="Select * from TB_Calculo";
        $teste = $db->query($query);
        $retorno = mysqli_fetch_all($teste);
        return $teste;
    }
