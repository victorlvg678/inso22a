<?php
require_once('../connection/db.php');
require_once('../models/match.php');

class MYSQLMatch{
    private $conn;

    public function __construct(){
        $db = new DB();
        $this->conn = $db->Connect();
    }

    public function __destruct(){
        $this->conn->close();
    }

    public function getAll(){
        $query = 'SELECT * FROM Match ORDER BY ID ASC';

        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $matches = Array();
        for($x = 0; $x < count($items); $x++){
            $match = new Match();
            $match->set($items[$x]);
            array_push($matches, $match);
        }

        return $matches;
    }

    public function getByID($ID){
        $query = 'SELECT * FROM Match WHERE ID = ?';

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i', $ID);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $matches = Array();
        for($x = 0; $x < count($items); $x++){
            $match = new Match();
            $match->set($items[$x]);
            array_push($matches, $match);
        }

        return $matches;
    }

    public function getByMatchDate($Date){
        $query = 'SELECT * FROM Match WHERE MatchDate = ? ORDER BY ID ASC';

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $Date);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $matches = Array();
        for($x = 0; $x < count($items); $x++){
            $match = new Match();
            $match->set($items[$x]);
            array_push($matches, $match);
        }

        return $matches;
    }

    public function getByMatchTime($Time){
        $query = 'SELECT * FROM Match WHERE MatchTime = ? ORDER BY ID ASC';

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $Time);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $matches = Array();
        for($x = 0; $x < count($items); $x++){
            $match = new Match();
            $match->set($items[$x]);
            array_push($matches, $match);
        }

        return $matches;
    }

    public function getByTeam1($Team){
        $query = 'SELECT * FROM Match WHERE Team1 = (SELECT ID FROM Team WHERE Name LIKE ? ORDER BY ID ASC LIMIT 0, 0)';

        $Team = '%' . $Team . '%';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $Team);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $matches = Array();
        for($x = 0; $x < count($items); $x++){
            $match = new Match();
            $match->set($items[$x]);
            array_push($matches, $match);
        }

        return $matches;
    }

    public function getByTeam2($Team){
        $query = 'SELECT * FROM Match WHERE Team2 = (SELECT ID FROM Team WHERE Name LIKE ? ORDER BY ID ASC LIMIT 0, 0)';

        $Team = '%' . $Team . '%';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $Team);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $matches = Array();
        for($x = 0; $x < count($items); $x++){
            $match = new Match();
            $match->set($items[$x]);
            array_push($matches, $match);
        }

        return $matches;
    }

    public function getByScore1($Score){
        $query = 'SELECT * FROM Match WHERE Score1 = ? ORDER BY ID ASC';

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i', $Score);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $matches = Array();
        for($x = 0; $x < count($items); $x++){
            $match = new Match();
            $match->set($items[$x]);
            array_push($matches, $match);
        }

        return $matches;
    }

    public function getByScore2($Score){
        $query = 'SELECT * FROM Match WHERE Score2 = ? ORDER BY ID ASC';

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('i', $Score);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $matches = Array();
        for($x = 0; $x < count($items); $x++){
            $match = new Match();
            $match->set($items[$x]);
            array_push($matches, $match);
        }

        return $matches;
    }

    public function getByDuration($Duration){
        $query = 'SELECT * FROM Match WHERE Duration = ? ORDER BY ID ASC';

        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $Duration);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $matches = Array();
        for($x = 0; $x < count($items); $x++){
            $match = new Match();
            $match->set($items[$x]);
            array_push($matches, $match);
        }

        return $matches;
    }

    public function getByLocation($Location){
        $query = 'SELECT * FROM Match WHERE Location LIKE ? ORDER BY ID ASC';

        $Location = '%' . $Location . '%';
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $Location);
        $stmt->execute();
        $result = $stmt->get_result();
        $items = $result->fetch_all(MYSQLI_ASSOC);

        $matches = Array();
        for($x = 0; $x < count($items); $x++){
            $match = new Match();
            $match->set($items[$x]);
            array_push($matches, $match);
        }

        return $matches;
    }

}
?>