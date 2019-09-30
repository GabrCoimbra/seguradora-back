<?php
//Incluindo a conexão com o banco
require_once './conn/conexao.php';

$database = new Database();
$db = $database->conexao();
    function cadastrar($dados){
        echo json_encode($dados['nome']);
        $sql = 'insert into tb_calculo values(
            null,
            '.$dados['nome'].',
            '.$dados['sexo'].',
            '.$dados['date'].',
            '.$dados['marca'].',
            '.$dados['veiculo'].',
            1
            )';
        //$envia = $db->query($query);
        //return $envia;
    }