<?php
class Database
{
    public function conexao()
    {
        $conn = new mysqli("mysql.fatecrl.edu.br", "fatecrl05", "seguradora123", "fatecrl05") or die('Error ao se conectar ao servidor: '. mysql_error());
        $conn->query("SET NAMES 'utf8'");
        $conn->query('SET character_set_connection=utf8');
        $conn->query('SET character_set_client=utf8');
        $conn->query('SET character_set_results=utf8');
        return $conn;
    }
}
