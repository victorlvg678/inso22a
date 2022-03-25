<?php
require_once('../repos/mysqlteam.php');
require_once('../classes/mapper.php');
require_once('../classes/json.php');
require_once('../models/team.php');
require_once('../dtos/teamreaddto.php');
class TeamController{
    private $repo;
    
    public function __construct(){
        $this->repo = new MYSQLTeam();
    }
    
    public function getByID($ID){
        $items = $this->repo->getByID($ID);
        $team = Array();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());
        $Src = new Team();
        $JSON = new JSON();
        $Src->set($items[0]);
        $mapper->setSrc($Src);
        array_push($team, $mapper->Map());
        return json_encode($JSON->Parse($team));
    }
    
    public function getByName($Name){
        $items = $this->repo->getByName($Name);
        $teamsread = Array();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());
        $Src = new Team();
        $JSON = new JSON();
        for($x = 0; $x < count($items); $x++){
            $Src->set($items[$x]);
            $mapper->setSrc($Src);
            array_push($teamsread, $mapper->Map());
        }
        return json_encode($JSON->Parse($teamsread));
    }
    
    public function getByState($State){
        $items = $this->repo->getByState($State);
        $teamsread = Array();
        $JSON = new JSON();
        $mapper = new Mapper();
        $Src = new Team();
        $mapper->setDst(new TeamReadDTO());
        for($x = 0; $x < count($items); $x++){
            $Src->set($items[$x]);
            $mapper->setSrc($Src);
            array_push($teamsread, $mapper->Map());
        }
        return json_encode($JSON->Parse($teamsread));
    }
    
    public function getByCity($City){
        $items = $this->repo->getByCity($City);
        $teamsread = Array();
        $JSON = new JSON();
        $mapper = new Mapper();
        $Src = new Team();
        $mapper->setDst(new TeamReadDTO());
        for($x = 0; $x < count($items); $x++){
            $Src->set($items[$x]);
            $mapper->setSrc($Src);
            array_push($teamsread, $mapper->Map());
        }
        return json_encode($JSON->Parse($teamsread));
    }
    
    public function getByDistrict($District){
        $items = $this->repo->getByDistrict($District);
        $teamsread = Array();
        $JSON = new JSON();
        $Src = new Team();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());
        for($x = 0; $x < count($items); $x++){
            $Src->set($items[$x]);
            $mapper->setSrc($Src);
            array_push($teamsread, $mapper->Map());
        }
        return json_encode($JSON->Parse($teamsread));
        
    }
    
    public function getByLocation($Location){
        $items = $this->repo->getByLocation($Location);
        $teamsread = Array();
        $JSON = new JSON();
        $Src = new Team();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());
        for($x = 0; $x < count($items); $x++){
            $Src->set($items[$x]);
            $mapper->setSrc($Src);
            array_push($teamsread, $mapper->Map());
        }
        return json_encode($JSON->Parse($teamsread));
    }
    
    public function getByMatches($Matches){
        $items = $this->repo->getByMatches($Matches);
        $teamsread = Array();
        $JSON = new JSON();
        $Src = new Team();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());
        for($x = 0; $x < count($items); $x++){
            $Src->set($items[$x]);
            $mapper->setSrc($Src);
            array_push($teamsread, $mapper->Map());
        }
        return json_encode($JSON->Parse($teamsread));
    }
    
    public function getByWon($Won){
        $items = $this->repo->getByWon($Won);
        $teamsread = Array();
        $JSON = new JSON();
        $Src = new Team();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());
        for($x = 0; $x < count($items); $x++){
            $Src->set($items[$x]);
            $mapper->setSrc($Src);
            array_push($teamsread, $mapper->Map());
        }
        return json_encode($JSON->Parse($teamsread));
    }
    
    public function getByLost($Lost){
        $items = $this->repo->getByLost($Lost);
        $teamsread = Array();
        $JSON = new JSON();
        $Src = new Team();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());
        for($x = 0; $x < count($items); $x++){
            $Src->set($items[$x]);
            $mapper->setSrc($Src);
            array_push($teamsread, $mapper->Map());
        }
        return json_encode($JSON->Parse($teamsread));
    }
    
    public function getByCoach($Name){
        $items = $this->repo->getByCoach($Name);
        $teamsread = Array();
        $JSON = new JSON();
        $Src = new Team();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());
        for($x = 0; $x < count($items); $x++){
            $Src->set($items[$x]);
            $mapper->setSrc($Src);
            array_push($teamsread, $mapper->Map());
        }
        return json_encode($JSON->Parse($teamsread));
    }
    
    public function getAll(){
        $items = $this->repo->getAll();
        $teamsread = Array();
        $JSON = new JSON();
        $Src = new Team();
        $mapper = new Mapper();
        $mapper->setDst(new TeamReadDTO());
        for($x = 0; $x < count($items); $x++){
            $Src->set($items[$x]);
            $mapper->setSrc($Src);
            array_push($teamsread, $mapper->Map());
        }
        return json_encode($JSON->Parse($teamsread));
    }
}
?>