<?php
require_once('../connection/db.php');
require_once('../models/secquestion.php');

class MYSQLSecQuestion{
    private $conn;

    public function __construct(){
        $db = new DB();
        $this->conn = $db->Connect();
    }

    public function __destruct(){
        $this->conn->close();
    }

    public function getAll(){
        $query = 'SELECT * FROM SecQuestion ORDER BY ID ASC';

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $secquestions = Array();
        for($x = 0; $x < count($items); $x++){
            $secquestion = new SecQuestion();
            $secquestion->set($items[$x]);
            array_push($secquestions, $secquestion);
        }

        return $secquestions;
    }

    public function getByID($ID){
        $query = 'SELECT * FROM SecQuestion WHERE ID = ?';

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i', $ID);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $secquestions = Array();
        for($x = 0; $x < count($items); $x++){
            $secquestion = new SecQuestion();
            $secquestion->set($items[$x]);
            array_push($secquestions, $secquestion);
        }

        return $secquestions;
    }

    public function getByEN($EN){
        $query = 'SELECT * FROM SecQuestion WHERE EN LIKE ? ORDER BY ID ASC';

        $EN = '%' . $EN . '%';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $EN);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $secquestions = Array();
        for($x = 0; $x < count($items); $x++){
            $secquestion = new SecQuestion();
            $secquestion->set($items[$x]);
            array_push($secquestions, $secquestion);
        }

        return $secquestions;
    }

    public function getByES($ES){
        $query = 'SELECT * FROM SecQuestion WHERE ES LIKE ? ORDER BY ID ASC';

        $ES = '%' . $ES . '%';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $ES);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $secquestions = Array();
        for($x = 0; $x < count($items); $x++){
            $secquestion = new SecQuestion();
            $secquestion->set($items[$x]);
            array_push($secquestions, $secquestion);
        }

        return $secquestions;
    }
}
?>