<?php 
require_once('../connection/db.php');
class UserController{
    
    public function __construct(){
        
    }
    
    public function getById($ID){
        $db = new DB();
        $conn = $db->Connect();
        $query = 'SELECT * FROM Users WHERE ID = ?';
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $ID);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_all(MYSQLI_ASSOC);
        return json_encode($user);
    }
    
    public function getByUsername($Username){
        $db = new DB();
        $conn = $db->Connect();
        $query = 'SELECT * FROM Users WHERE Username = ?';
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $Username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_all(MYSQLI_ASSOC);
        return json_encode($user);
    }
    
    public function getByFirstname($Firstname){
        $db = new DB();
        $conn = $db->Connect();
        $query = "SELECT * FROM Users WHERE Firstname LIKE ? ORDER BY ID ASC";
        $Firstname = '%' . $Firstname . '%';
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $Firstname);
        $stmt->execute();
        $result = $stmt->get_result();
        $users = $result->fetch_all(MYSQLI_ASSOC);
        return json_encode($users);
    }
    
    public function getByLastname($Lastname){
        $db = new DB();
        $conn = $db->Connect();
        $query = "SELECT * FROM Users WHERE Lastname LIKE ? ORDER BY ID ASC";
        $Lastname = '%' . $Lastname . '%';
        $stmt = $conn->prepare($query);
        $stmt->bind_param('s', $Lastname);
        $stmt->execute();
        $result = $stmt->get_result();
        $users = $result->fetch_all(MYSQLI_ASSOC);
        return json_encode($users);
    }
    
    public function getByTeam($Team){
        $db = new DB();
        $conn = $db->Connect();
        $query = "SELECT * FROM Users WHERE Team = ? ORDER BY ID ASC";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('i', $Team);
        $stmt->execute();
        $result = $stmt->get_result();
        $users = $result->fetch_all(MYSQLI_ASSOC);
        return json_encode($users);
    }
    
    public function getAll(){
        $db = new DB();
        $conn = $db->Connect();
        $query = 'SELECT * FROM Users';
        $stmt = $conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_all(MYSQLI_ASSOC);
        return json_encode($user);
    }
}    
?>
