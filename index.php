<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require_once 'model/listagem.php';

$dados = array();
$calculos = listar();
foreach ($calculos as $i) {
    $i = array(
        'id' => $i['cd_Calculo'],
        'nome' => $i['nm_Condutor'],
        'marca' => $i['ds_Marca'],
        'veiculo' => $i['ds_Veiculo']
    );
    array_push($dados, $i);
    echo $i['cd_Calculo'];
}

echo 'vai';
