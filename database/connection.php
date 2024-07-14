<?php 
class Connection {
    private $host;
    private $db;
    private $user;
    private $pass;
    private $charset;
    private $conn;

    public function __construct() {
        $this->host = 'localhost';
        $this->db = 'db_biblioteca';
        $this->user = 'root';
        $this->pass = '';
        $this->charset = 'utf8mb4';
    }

    public function getConnection() {
        $dsn = "mysql:host={$this->host};dbname={$this->db};charset={$this->charset}";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];

        try {
            $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage(), (int)$e->getCode());
        }

        return $this->conn;
    }
}

?>