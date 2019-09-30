<?php
class Database{
    public function conexao(){
        $conn = new mysqli("https://www.db4free.net","seguradoraback","12345678","seguradoraback");
        $conn->query("SET NAMES 'utf8'");
        $conn->query('SET character_set_connection=utf8');
        $conn->query('SET character_set_client=utf8');
        $conn->query('SET character_set_results=utf8');
        return $conn;
    }
}
?>