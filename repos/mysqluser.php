<?php
require_once('../connection/db.php');
require_once('../models/user.php');

class MYSQLYUser{
    private $conn;

    public function __construct(){
        $db = new DB();
        $this->conn = $db->Connect();
    }

    public function __destruct(){
        $this->conn->close();
    }

    public function getByID($ID){
        $query = 'SELECT * FROM Users WHERE ID = ?';

        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $ID);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);
        
        $users = Array();
        for($x = 0; $x < count($items); $x++){
            $user = new User();
            $user->set($items[$x]);
            array_push($users, $user);
        }

        return $users;
    }

    public function getByUsername($Username){
        $query = 'SELECT * FROM Users WHERE Username = ?';

        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $Username);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $users = Array();
        for($x = 0; $x < count($items); $x++){
            $user = new User();
            $user->set($items[$x]);
            array_push($users, $user);
        }

        return $users;
    }

    public function getByFirstname($Firstname){
        $query = "SELECT * FROM Users WHERE Firstname LIKE ? ORDER BY ID ASC";
        
        $Firstname = '%' . $Firstname . '%';
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $Firstname);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $users = Array();
        for($x = 0; $x < count($items); $x++){
            $user = new User();
            $user->set($items[$x]);
            array_push($users, $user);
        }

        return $users;
    }

    public function getByLastname($Lastname){
        $query = 'SELECT * FROM Users WHERE Lastname LIKE ? ORDER BY ID ASC';

        $Lastname = '%' . $Lastname . '%';
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $Lastname);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $users = Array();
        for($x = 0; $x < count($items); $x++){
            $user = new User();
            $user->set($items[$x]);
            array_push($users, $user);
        }

        return $users;
    }

    public function getByEmail($Email){
        $query = 'SELECT * FROM Users WHERE Email LIKE ? ORDER BY ID ASC';

        $Email = '%' . $Email . '%';
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $Email);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $users = Array();
        for($x = 0; $x < count($items); $x++){
            $user = new User();
            $user->set($items[$x]);
            array_push($users, $user);
        }

        return $users;
    }

    public function getByTeam($Team){
        $query = "SELECT * FROM Users WHERE Team = (SELECT ID FROM Team WHERE Name LIKE ? ORDER BY ID ASC LIMIT 0, 0)";
        
        $Lastname = '%' . $Team . '%';
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $Team);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $users = Array();
        for($x = 0; $x < count($items); $x++){
            $user = new User();
            $user->set($items[$x]);
            array_push($users, $user);
        }

        return $users;
    }

    public function getAll(){
        $query = 'SELECT * FROM Users';

        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $users = Array();
        for($x = 0; $x < count($items); $x++){
            $user = new User();
            $user->set($items[$x]);
            array_push($users, $user);
        }

        return $users;
    }

    public function createUser($User){
        $query = 'INSERT INTO User(Username, Firstname, Lastname, BirthDate, Description, ' . 
        'Status, Notify, Role, Salt, Password, QID1, QID2, QID3, QID4, QA1, QA2, QA3, QA4, ' .
        'EntryDate, Nationality, Weight, Height, Team) VALUES (?, ?, ?, ?, ?, 1, 1, 1, ?, ?, ' .
        '?, ?, ?, ?, ?, ?, ?, ?, CURRENT_DATE(), ?, ?, ?, ?)';

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('sssssssiiiisssssddi', $User->getUsername(), $User->getFirstname(), 
        $User->getLastname(), $User->getBirthDate(), $User->getDescription(), $User->getSalt(), 
        $User->getPassword(), $User->getQID1(), $User->getQID2(), $User->getQID3(), $User->getQID4(),
        $User->getQA1(), $User->getQA2(), $User->getQA3(), $User->getQA4(), $User->getNationality(),
        $User->getWeight(), $User->getHeight(), $User->getTeam());

        $users = Array();
        if($stmt->execute()){
            array_push($users, $User);
        }

        return $users;
    }
}