<?php
require_once('../connection/db.php');
require_once('../models/team.php');

class MYSQLTeam{
    private $conn;
    
    public function __construct(){
        $db = new DB();
        $this->conn = $db->Connect();
    }
    
    public function __destruct(){
        $this->conn->close();
    }
    
    public function getByID($ID){
        $query = 'SELECT * FROM Team WHERE ID = ?';

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i', $ID);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $teams = Array();
        for($x = 0; $x < count($items); $x++){
            $team = new Team();
            $team->set($items[$x]);
            array_push($teams, $team);    
        }

        return $teams;
    }
    
    public function getByName($Name){
        $query = "SELECT * FROM Team WHERE Name LIKE ? ORDER BY ID ASC";

        $Name = '%' . $Name . '%';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $Name);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $teams = Array();
        for($x = 0; $x < count($items); $x++){
            $team = new Team();
            $team->set($items[$x]);
            array_push($teams, $team);    
        }

        return $teams;
    }
    
    public function getByState($State){
        $query = "SELECT * FROM Team WHERE State LIKE ? ORDER BY ID ASC";

        $State = '%' . $State . '%';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $State);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $teams = Array();
        for($x = 0; $x < count($items); $x++){
            $team = new Team();
            $team->set($items[$x]);
            array_push($teams, $team);    
        }

        return $teams;
    }
    
    public function getByCity($City){
        $query = "SELECT * FROM Team WHERE City LIKE ? ORDER BY ID ASC";

        $City = '%' . $City . '%';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $City);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $teams = Array();
        for($x = 0; $x < count($items); $x++){
            $team = new Team();
            $team->set($items[$x]);
            array_push($teams, $team);    
        }
        
        return $teams;
    }
    
    public function getByDistrict($District){
        $query = "SELECT * FROM Team WHERE District LIKE ? ORDER BY ID ASC";

        $District = '%' . $District . '%';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $District);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $teams = Array();
        for($x = 0; $x < count($items); $x++){
            $team = new Team();
            $team->set($items[$x]);
            array_push($teams, $team);    
        }

        return $teams;
    }
    
    public function getByLocation($Location){
        $query = "SELECT * FROM Team WHERE Location LIKE ? ORDER BY ID ASC";

        $Location = '%' . $Location . '%';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $Location);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $teams = Array();
        for($x = 0; $x < count($items); $x++){
            $team = new Team();
            $team->set($items[$x]);
            array_push($teams, $team);    
        }

        return $teams;
    }
    
    public function getByMatches($Matches){
        $query = "SELECT * FROM Team WHERE Matches = ? ORDER BY ID ASC";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i', $Matches);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $teams = Array();
        for($x = 0; $x < count($items); $x++){
            $team = new Team();
            $team->set($items[$x]);
            array_push($teams, $team);    
        }

        return $teams;
    }
    
    public function getByWon($Won){
        $query = "SELECT * FROM Team WHERE Won = ? ORDER BY ID ASC";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i', $Won);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $teams = Array();
        for($x = 0; $x < count($items); $x++){
            $team = new Team();
            $team->set($items[$x]);
            array_push($teams, $team);    
        }

        return $teams;
    }
    
    public function getByLost($Lost){
        $query = "SELECT * FROM Team WHERE Lost = ? ORDER BY ID ASC";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i', $Lost);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $teams = Array();
        for($x = 0; $x < count($items); $x++){
            $team = new Team();
            $team->set($items[$x]);
            array_push($teams, $team);    
        }

        return $teams;
    }
    
    public function getByCoach($Coach){
        $query = "SELECT * FROM Team WHERE Coach = (SELECT ID FROM Users WHERE CONCAT(Firstname, ' ', Lastname) = ?) ORDER BY ID ASC";

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $Name);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $teams = Array();
        for($x = 0; $x < count($items); $x++){
            $team = new Team();
            $team->set($items[$x]);
            array_push($teams, $team);    
        }

        return $teams;
    }
    
    public function getAll(){
        $query = 'SELECT * FROM Team ORDER BY ID ASC';

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $teams = Array();
        for($x = 0; $x < count($items); $x++){
            $team = new Team();
            $team->set($items[$x]);
            array_push($teams, $team);    
        }
        
        return $teams;
    }
}
?>