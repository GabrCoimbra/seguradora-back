<?php
//Incluindo a conexão com o banco
require_once './conn/conexao.php';

$database = new Database();
$db = $database->conexao();
    function listar($id)
    {
        global $db;
        $query="Select * from tb_calculo ";
        if ($id) {
            $query.= " where cd_Calculo = ".$id;
        }
        $query .= " ORDER BY cd_Calculo DESC";
        $teste = $db->query($query);
        $retorno = mysqli_fetch_all($teste);
       
        return $teste;
    }
