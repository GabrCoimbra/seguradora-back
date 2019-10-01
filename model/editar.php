<?php
//Incluindo a conexão com o banco
require_once './conn/conexao.php';

$database = new Database();
$db = $database->conexao();
    function editar($dados)
    {
        global $db;
        $sql = 'update tb_calculo set
            nm_Condutor = "'.$dados['nome'].'",
            ds_Sexo = "'.$dados['sexo'].'",
            dt_Nascimento = "'.$dados['date'].'",
            ds_Marca = "'.$dados['marca'].'",
            ds_Veiculo = "'.$dados['veiculo'].'",
            vl_Veiculo = "'.$dados['valor'].'"
            where cd_Calculo = '.$dados['id'];
        $envia = $db->query($sql);
        return $envia;
    }
