<?php
require_once('../connection/db.php');
require_once('../models/role.php');

class MYSQLRole{
    private $conn;

    public function __construct(){
        $db = new DB();
        $this->conn = $db->Connect();
    }

    public function __destruct(){
        $this->conn->close();
    }

    public function getAll(){
        $query = 'SELECT * FROM Role ORDER BY ID ASC';

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $roles = Array();
        for($x = 0; $x < count($items); $x++){
            $role = new Role();
            $role->set($items[$x]);
            array_push($roles, $role);
        }

        return $roles;
    }

    public function getByID($ID){
        $query = 'SELECT * FROM Role WHERE ID = ?';

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i', $ID);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $roles = Array();
        for($x = 0; $x < count($items); $x++){
            $role = new Role();
            $role->set($items[$x]);
            array_push($roles, $role);
        }

        return $roles;
    }

    public function getByCode($Code){
        $query = 'SELECT * FROM Role WHERE Code = ?';

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $Code);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $roles = Array();
        for($x = 0; $x < count($items); $x++){
            $role = new Role();
            $role->set($items[$x]);
            array_push($roles, $role);
        }

        return $roles;
    }

    public function getByEN($EN){
        $query = 'SELECT * FROM Role WHERE EN LIKE ? ORDER BY ID ASC';

        $EN = '%' . $EN . '%';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $EN);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $roles = Array();
        for($x = 0; $x < count($items); $x++){
            $role = new Role();
            $role->set($items[$x]);
            array_push($roles, $role);
        }

        return $roles;
    }

    public function getByES($ES){
        $query = 'SELECT * FROM Role WHERE ES LIKE ? ORDER BY ID ASC';

        $ES = '%' . $ES . '%';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $ES);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $roles = Array();
        for($x = 0; $x < count($items); $x++){
            $role = new Role();
            $role->set($items[$x]);
            array_push($roles, $role);
        }

        return $roles;
    }
}

?>