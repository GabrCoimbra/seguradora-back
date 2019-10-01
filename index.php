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
    //Logica do valor do seguro
    if ($id) {
        $vlBase = $i['vl_Veiculo']*0.03;
        $idade = calculo_idade($i['dt_Nascimento']);
        switch ($idade) {
            case  $idade < 25:
                $ac= $vlBase*0.1;
                break;
            case  $idade < 30:
                $ac= $vlBase*0.05;
                break;
            
            case  $idade < 35:
                $ac= $vlBase*0.02;
                break;
            case $idade > 35:            
                $ac = 0;
                break;
            default:
                break;
        }
        $ac1 = $i['ds_Sexo'] == "M" ? $vlBase*0.1 : 0;  
        $seguro = $vlBase + $ac + $ac1;
    }
    $i = array(
        'id' => $i['cd_Calculo'],
        'nome' => $i['nm_Condutor'],
        'sexo' => $i['ds_Sexo'],
        'date' => $i['dt_Nascimento'],
        'marca' => $i['ds_Marca'],
        'veiculo' => $i['ds_Veiculo'],
        'valor' => $i['vl_Veiculo'],
        'seguro' => $seguro,
    );
    array_push($dados, $i);
}


function calculo_idade($data)
{
    //Data atual
    $ano = date('Y');
    //Data do aniversário
   
    $nascimento = explode('-', $data);
    $anonasc = ($nascimento[0]);
    
    //Calculando sua idade
    $idade = $ano - $anonasc;
    return $idade;
}


echo json_encode($dados);
