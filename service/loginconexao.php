<?php
class UsePDO
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
           
            $dsn = "mysql:host=$this->servername;dbname=$this->dbname;charset=utf8mb4";
            $conn = new PDO($dsn, $this->username, $this->password);

         
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
            $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ); 

            return $conn;
        } catch (PDOException $e) {
          
            error_log("Connection failed: " . $e->getMessage());
            echo "Ocorreu um erro na conexão com o banco de dados. Por favor, tente novamente mais tarde.";
            exit();
        }
    }
}
?>
