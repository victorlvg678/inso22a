<?php
class MatchReadDTO{
    private $id;
    private $matchdate;
    private $matchtime;
    private $team1;
    private $team2;
    private $score1;
    private $score2;
    private $duration;
    private $location;

    public function __construct(){
        $this->id = 0;
        $this->matchdate = '1900-01-01';
        $this->matchtime = '00:00';
        $this->team1 = 0;
        $this->team2 = 0;
        $this->score1 = 0;
        $this->score2 = 0;
        $this->duration = 0;
        $this->location = "NA";
    }

    // |----------------------Setters-------------------|
    public function setID($ID){
        if(!empty($ID)){
            $this->id = $ID;
            return;
        }

        $this->id = 0;
    }

    public function setMatchDate($Date){
        if(!empty($Date)){
            $this->matchdate = $Date;
            return;
        }

        $this->matchdate = '1900-01-01';
    }

    public function setMatchTime($Time){
        if(!empty($Time)){
            $this->matchtime = $Time;
            return;
        }

        $this->matchtime = '00:00';
    }

    public function setTeam1($Team){
        if(!empty($Team)){
            $this->team1 = $Team;
            return;
        }

        $this->team1 = 0;
    }

    public function setTeam2($Team){
        if(!empty($Team)){
            $this->team2 = $Team;
            return;
        }

        $this->team2 = 0;
    }

    public function setScore1($Score){
        if(!empty($Score)){
            $this->score1 = $Score;
            return;
        }

        $this->score1 = 0;
    }

    public function setScore2($Score){
        if(!empty($Score)){
            $this->score2 = $Score;
            return;
        }

        $this->score2 = 0;
    }

    public function setDuration($Duration){
        if(!empty($Duration)){
            $this->duration = $Duration;
            return;
        }

        $this->duration = 0;
    }

    public function setLocation($Location){
        if(!empty($Location)){
            $this->location = $Location;
            return;
        }

        $this->location = "NA";
    }

    public function set($Src){
        if(empty($Src)){
            echo "Error Match::set(Match): Match is empty";
            return;
        }

        if(array_key_exists("ID", $Src)){
            $this->setID($Src["ID"]);
        }

        if(array_key_exists("MatchDate", $Src)){
            $this->setMatchDate($Src["MatchDate"]);
        }

        if(array_key_exists("MatchTime", $Src)){
            $this->setMatchTime($Src["MatchTime"]);
        }

        if(array_key_exists("Team1", $Src)){
            $this->setTeam1($Src["Team1"]);
        }

        if(array_key_exists("Team2", $Src)){
            $this->setTeam2($Src["Team2"]);
        }

        if(array_key_exists("Score1", $Src)){
            $this->setScore1($Src["Score1"]);
        }

        if(array_key_exists("Score2", $Src)){
            $this->setScore2($Src["Score2"]);
        }

        if(array_key_exists("Duration", $Src)){
            $this->setDuration($Src["Duration"]);
        }

        if(array_key_exists("Location", $Src)){
            $this->setLocation($Src["Location"]);
        }
    }

    // |------------------------------Getters-------------------------|
    public function getID(){
        return $this->id;
    }

    public function getMatchDate(){
        return $this->matchdate;
    }

    public function getMatchTime(){
        return $this->matchtime;
    }

    public function getTeam1(){
        return $this->team1;
    }

    public function getTeam2(){
        return $this->team2;
    }

    public function getScore1(){
        return $this->score1;
    }

    public function getScore2(){
        return $this->score2;
    }

    public function getDuration(){
        return $this->duration;
    }

    public function getLocation(){
        return $this->location;
    }
}

?>