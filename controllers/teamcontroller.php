<?php
require_once('../repos/mysqlteam.php');
require_once('../classes/mapper.php');
require_once('../classes/json.php');
require_once('../models/team.php');
require_once('../dtos/teamreaddto.php');
require_once('../classes/apierror.php');

class TeamController{
    private $repo;
    
    public function __construct(){
        $this->repo = new MYSQLTeam();
    }
    
    public function getByID($ID){
        $items = $this->repo->getByID($ID);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $team = Array();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());
        $JSON = new JSON();
        $mapper->setSrc($items[0]);
        array_push($team, $mapper->Map());

        return json_encode($JSON->Parse($team));
    }
    
    public function getByName($Name){
        $items = $this->repo->getByName($Name);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $teams = Array();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());
        $JSON = new JSON();

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($teams, $mapper->Map());
        }

        return json_encode($JSON->Parse($teams));
    }
    
    public function getByState($State){
        $items = $this->repo->getByState($State);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $teams = Array();
        $JSON = new JSON();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($teams, $mapper->Map());
        }

        return json_encode($JSON->Parse($teams));
    }
    
    public function getByCity($City){
        $items = $this->repo->getByCity($City);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $teams = Array();
        $JSON = new JSON();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($teams, $mapper->Map());
        }

        return json_encode($JSON->Parse($teams));
    }
    
    public function getByDistrict($District){
        $items = $this->repo->getByDistrict($District);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $teams = Array();
        $JSON = new JSON();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($teams, $mapper->Map());
        }

        return json_encode($JSON->Parse($teams));
    }
    
    public function getByLocation($Location){
        $items = $this->repo->getByLocation($Location);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $teams = Array();
        $JSON = new JSON();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($teamsread, $mapper->Map());
        }

        return json_encode($JSON->Parse($teams));
    }
    
    public function getByMatches($Matches){
        $items = $this->repo->getByMatches($Matches);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $teams = Array();
        $JSON = new JSON();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($teams, $mapper->Map());
        }

        return json_encode($JSON->Parse($teams));
    }
    
    public function getByWon($Won){
        $items = $this->repo->getByWon($Won);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $teams = Array();
        $JSON = new JSON();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($teams, $mapper->Map());
        }

        return json_encode($JSON->Parse($teams));
    }
    
    public function getByLost($Lost){
        $items = $this->repo->getByLost($Lost);
        if(count($items) <= 0){
            $Error = new APIError(7);
            return $Error->getMessage();
        }

        $teams = Array();
        $JSON = new JSON();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($teams, $mapper->Map());
        }

        return json_encode($JSON->Parse($teams));
    }
    
    public function getByCoach($Name){
        $items = $this->repo->getByCoach($Name);
        if(count($items) <= 0){
            $Error = new APIError(7);
            return $Error->getMessage();
        }

        $teams = Array();
        $JSON = new JSON();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());
        
        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($teams, $mapper->Map());
        }

        return json_encode($JSON->Parse($teams));
    }
    
    public function getAll(){
        $items = $this->repo->getAll();
        if(count($items) <= 0){
            $Error = new APIError(7);
            return $Error->getMessage();
        }

        $teams = Array();
        $JSON = new JSON();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($teams, $mapper->Map());
        }
        
        return json_encode($JSON->Parse($teams));
    }
}
?>