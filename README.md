<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "12345678";
    private $database = "prueba";
    private $conn;

    public function connect() {
        try {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
            if ($this->conn->connect_error) {
                throw new Exception("Error de conexión: " . $this->conn->connect_error);
            }
            return $this->conn;
        } catch (Exception $e) {
            die("Error: " . $e->getMessage());
        }
    }
}

// Para mantener compatibilidad con el código existente
$conn = (new Database())->connect();
?>