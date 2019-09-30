<?php
 header('Access-Control-Allow-Origin: *');
 header("Access-Control-Allow-Credentials: true");
 header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
 header('Access-Control-Max-Age: 1000');
 header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

require_once 'model/cadastro.php';

$json = file_get_contents('php://input');
$obj  = json_decode($json, true);
$ch = curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, "http://www.speedyofficer.com.br/desenvVeiculos/wsRstSpeedyVeiculos_Case.dll/veiculo?cod_marca=10");//.$obj['idMarcca']);
$result = curl_exec($ch);
curl_close($ch);
$veiculo = in_array("Ranget", $result);
// $veiculo = array_search('Ranger', $result['descricao_veiculo']);
echo $veiculo;
echo $result;
$result = json_decode($result, true);

/*
$retorno = cadastrar($obj);
if($retorno){
    echo json_encode('Cadastrado com sucesso');
}
else{
    echo json_encode('Não funcionou');
}

*/