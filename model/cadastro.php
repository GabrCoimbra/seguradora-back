<?php
//Incluindo a conexão com o banco
require_once './conn/conexao.php';

$database = new Database();
$db = $database->conexao();
    function cadastrar($dados){
        global $db;
        $sql = 'insert into tb_calculo values(
            null,
            "'.$dados['nome'].'",
            "'.$dados['sexo'].'",
            "'.$dados['date'].'",
            "'.$dados['marca'].'",
            "'.$dados['veiculo'].'",
            '.$dados['valor'].'
            )';
        $envia = $db->query($sql);
        return $envia;
    }