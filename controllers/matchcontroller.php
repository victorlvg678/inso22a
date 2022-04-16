<?php
require_once('../repos/mysqlmatch.php');
require_once('../classes/mapper.php');
require_once('../classes/json.php');
require_once('../models/match.php');
require_once('../dtos/matchreaddto.php');
require_once('../classes/apierror.php');

class MatchController{
    private $repo;

    public function __construct(){
        $this->repo = new MYSQLMatch();
    }

    public function getAll(){
        $items = $this->repo->getAll();
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $matches = Array();
        $mapper = new Mapper();
        $JSON = new JSOn();
        $mapper->setDst(new MatchReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper-setSrc($items[$x]);
            array_push($matches, $mapper->Map());
        }

        return json_encode($JSON->Parse($matches));
    }

    public function getByID($ID){
        $items = $this->repo->getByID($ID);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $matches = Array();
        $mapper = new Mapper();
        $JSON = new JSOn();
        $mapper->setDst(new MatchReadDTO());
        $mapper-setSrc($items[0]);
        array_push($matches, $mapper->Map());
        

        return json_encode($JSON->Parse($matches));
    }

    public function getByMatchDate($Date){
        $items = $this->repo->getByMatchDate($Date);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $matches = Array();
        $mapper = new Mapper();
        $JSON = new JSOn();
        $mapper->setDst(new MatchReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper-setSrc($items[$x]);
            array_push($matches, $mapper->Map());
        }

        return json_encode($JSON->Parse($matches));
    }

    public function getByMatchTime($Time){
        $items = $this->repo->getByMatchTime($Time);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $matches = Array();
        $mapper = new Mapper();
        $JSON = new JSOn();
        $mapper->setDst(new MatchReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper-setSrc($items[$x]);
            array_push($matches, $mapper->Map());
        }

        return json_encode($JSON->Parse($matches));
    }

    public function getByTeam1($Team){
        $items = $this->repo->getByTeam1($Team);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $matches = Array();
        $mapper = new Mapper();
        $JSON = new JSOn();
        $mapper->setDst(new MatchReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper-setSrc($items[$x]);
            array_push($matches, $mapper->Map());
        }

        return json_encode($JSON->Parse($matches));
    }

    public function getByTeam2($Team){
        $items = $this->repo->getByTeam2($Team);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $matches = Array();
        $mapper = new Mapper();
        $JSON = new JSOn();
        $mapper->setDst(new MatchReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper-setSrc($items[$x]);
            array_push($matches, $mapper->Map());
        }

        return json_encode($JSON->Parse($matches));
    }

    public function getByScore1($Score){
        $items = $this->repo->getByScore1($Score);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $matches = Array();
        $mapper = new Mapper();
        $JSON = new JSOn();
        $mapper->setDst(new MatchReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper-setSrc($items[$x]);
            array_push($matches, $mapper->Map());
        }

        return json_encode($JSON->Parse($matches));
    }

    public function getByScore2($Score){
        $items = $this->repo->getByScore2($Score);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $matches = Array();
        $mapper = new Mapper();
        $JSON = new JSOn();
        $mapper->setDst(new MatchReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper-setSrc($items[$x]);
            array_push($matches, $mapper->Map());
        }

        return json_encode($JSON->Parse($matches));
    }

    public function getByDuration($Duration){
        $items = $this->repo->getByDuration($Duration);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $matches = Array();
        $mapper = new Mapper();
        $JSON = new JSOn();
        $mapper->setDst(new MatchReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper-setSrc($items[$x]);
            array_push($matches, $mapper->Map());
        }

        return json_encode($JSON->Parse($matches));
    }

    public function getByLocation($Location){
        $items = $this->repo->getByLocation($Location);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $matches = Array();
        $mapper = new Mapper();
        $JSON = new JSOn();
        $mapper->setDst(new MatchReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper-setSrc($items[$x]);
            array_push($matches, $mapper->Map());
        }

        return json_encode($JSON->Parse($matches));
    }
    
}

?>