<?php
require_once('../dtos/teamcreatedto.php');
require_once('../dtos/rolecreatedto.php');
require_once('../dtos/secquestioncreatedto.php');

class JSON{
    public function __construct(){
        
    }
    
    public function Parse($Src){
        $object = Array();
        $objects = Array();
        $no_objects = count($Src);

        for($x = 0; $x < $no_objects; $x++){
            switch(get_class($Src[$x])){
                case "TeamReadDTO":
                    {
                        $object["id"] = $Src[$x]->getID();
                        $object["name"] = $Src[$x]->getName();
                        $object["state"] = $Src[$x]->getState();
                        $object["city"] = $Src[$x]->getCity();
                        $object["district"] = $Src[$x]->getDistrict();
                        $object["location"] = $Src[$x]->getLocation();
                        $object["matches"] = $Src[$x]->getMatches();
                        $object["won"] = $Src[$x]->getWon();
                        $object["lost"] = $Src[$x]->getLost();
                        $object["coach"] = $Src[$x]->getCoach();

                        array_push($objects, $object);
                        $object = Array();
                        break;
                    }
                case "UserReadDTO":
                    {
                        $object["id"] = $Src[$x]->getID();
                        $object["username"] = $Src[$x]->getUsername();
                        $object["firstname"] = $Src[$x]->getFirstname();
                        $object["lastname"] = $Src[$x]->getLastname();
                        $object["team"] = $Src[$x]->getTeam();
                        $object["birthdate"] = $Src[$x]->getBirthDate();
                        $object["description"] = $Src[$x]->getDescription();
                        $object["status"] = $Src[$x]->getStatus();
                        $object["role"] = $Src[$x]->getRole();
                        $object["lastlogin"] = $Src[$x]->getLastLogin();
                        $object["nationality"] = $Src[$x]->getNationality();
                        $object["entrydate"] = $Src[$x]->getEntryDate();
                        $object["weight"] = $Src[$x]->getWeight();
                        $object["height"] = $Src[$x]->getHeight();

                        array_push($objects, $object);
                        $object = Array();
                        break;
                    }

                case "RoleReadDTO":
                    {
                        $object["id"] = $Src[$x]->getID();
                        $object["code"] = $Src[$x]->getCode();
                        $object["en"] = $Src[$x]->getEN();
                        $object["es"] = $Src[$x]->getES();

                        array_push($objects, $object);
                        $object = Array();
                        break;
                    }

                case "SecQuestionReadDTO":
                    {
                        $object["id"] = $Src[$x]->getID();
                        $object["en"] = $Src[$x]->getEN();
                        $object["es"] = $Src[$x]->getES();

                        array_push($objects, $object);
                        $object = Array();
                        break;
                    }

                case "MatchReadDTO":
                    {
                        $object["id"] = $Src[$x]->getID();
                        $object["matchdate"] = $Src[$x]->getMatchDate();
                        $object["matchtime"] = $Src[$x]->getMatchTime();
                        $object["team1"] = $Src[$x]->getTeam1();
                        $object["team2"] = $Src[$x]->getTeam2();
                        $object["score1"] = $Src[$x]->getScore1();
                        $object["score2"] = $Src[$x]->getScore2();
                        $object["duration"] = $Src[$x]->getDuration();
                        $object["location"] = $Src[$x]->getLocation();

                        array_push($objects, $object);
                        $object = Array();
                        break;
                    }
            }
        }
        
        return $objects;
    }


    public function ToObject($Src, $Object){
        switch(get_class($Object)){
            case "TeamCreateDTO":{
                $Obj = new TeamCreateDTO();
                $Obj->setName($Src["name"]);
                $Obj->setState($Src["state"]);
                $Obj->setCity($Src["city"]);
                $Obj->setDistrict($Src["district"]);
                $Obj->setLocation($Src["location"]);
                $Obj->setMatches($Src["matches"]);
                $Obj->setWon($Src["won"]);
                $Obj->setLost($Src["lost"]);
                $Obj->setCoach($Src["coach"]);

                return $Obj;
            }

            case "RoleCreateDTO":{
                $Obj = new RoleCreateDTO();
                $Obj->setID($Src["id"]);
                $Obj->setCode($Src["code"]);
                $Obj->setEN($Src["en"]);
                $Obj->setES($Src["es"]);

                return $Obj;
            }

            case "SecQuestionCreateDTO":{
                $Obj = new SecQuestionCreateDTO();
                $Obj->setID($Src["id"]);
                $Obj->setEN($Src["en"]);
                $Obj->setES($Src["es"]);

                return $Obj;
            }

            case "MatchCreateDTO":{
                $Obj = new MatchCreateDTO();
                $Obj->setMatchDate($Src["matchdate"]);
                $Obj->setMatchTime($Src["matchtime"]);
                $Obj->setTeam1($Src["team1"]);
                $Obj->setTeam2($Src["team2"]);
                $Obj->setScore1($Src["score1"]);
                $Obj->setScore2($Src["score2"]);
                $Obj->setDuration($Src["duration"]);
                $Obj->setLocation($Src["location"]);

                return $Obj;
            }
        }
    }
}
?>