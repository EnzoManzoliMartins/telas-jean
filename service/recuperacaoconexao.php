<?php

class usePDO
{
    private $servername = "localhost"; 
    private $username = "root";
    private $password = ""; 
    private $dbname = "telas_jean"; 
    private $instance; 

    public function getInstance()
    {
        if (empty($this->instance)) {
            $this->instance = $this->connection();
        }
        return $this->instance;
    }

    private function connection()
    {
        try {
            $conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (PDOException $e) {
            echo "Erro de conexão: " . $e->getMessage();
            exit;
        }
    }
}

?>
