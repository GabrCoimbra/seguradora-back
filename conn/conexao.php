<?php
class Database{
    public function conexao(){
        $conn = new mysqli("localhost","root","usbw","seguradora");
        $conn->query("SET NAMES 'utf8'");
        $conn->query('SET character_set_connection=utf8');
        $conn->query('SET character_set_client=utf8');
        $conn->query('SET character_set_results=utf8');
        return $conn;
    }
}
?>