<?php
require_once('../../connection/db.php');

class MYSQLCountry{
    private $conn;

    public function __construct(){
        $db = new DB();
        $this->conn = $db->Connect();
    }

    public function __destruct(){
        $this->conn->close();
    }

    public function getAll(){
        $query = 'SELECT * FROM Country ORDER BY ID ASC';

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        return $items;
    }
}
?>