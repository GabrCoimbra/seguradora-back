<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
require_once 'model/listagem.php';

$dados = array();
if ($_GET['id']) {
    $id=$_GET['id'];
} else {
    $id = null;
}
$calculos = listar($id);
foreach ($calculos as $i) {
    $i = array(
        'id' => $i['cd_Calculo'],
        'nome' => $i['nm_Condutor'],
        'sexo' => $i['ds_Sexo'],
        'date' => $i['dt_Nascimento'],
        'marca' => $i['ds_Marca'],
        'veiculo' => $i['ds_Veiculo'],
        'valor' => $i['vl_Veiculo']
    );
    array_push($dados, $i);
}


echo json_encode($dados);
