<?php
require_once("../models/team.php");
require_once("../dtos/teamcreatedto.php");
require_once("../dtos/teamreaddto.php");
require_once("../models/user.php");
require_once("../dtos/userreaddto.php");
require_once("../models/role.php");
require_once("../dtos/rolecreatedto.php");
require_once("../dtos/rolereaddto.php");
require_once("../models/secquestion.php");
require_once("../dtos/secquestionreaddto.php");
require_once("../models/match.php");
require_once("../dtos/matchreaddto.php");
class Mapper{
    private $src;
    private $dst;
    
    public function __construct(){
        $this->src = null;
        $this->dst = null;
    }
    
    // |---------------------Setter--------------------------------------------|
    public function setSrc($Src){
        if(!empty($Src)){
            $this->src = $Src;
            return;
        }
        
        $this->src = null;
    }
    
    public function setDst($Dst){
        if(!empty($Dst)){
            $this->dst = $Dst;
            return;
        }

        $this->dst = null;
    }
    
    // |------------------Getters----------------------------------------------|
    public function getSrc(){
        return $this->src;
    }
    
    public function getDst(){
        return $this->dst;
    }
    
    public function Map(){
        switch(get_class($this->src)){
            case "Team":{
                switch(get_class($this->dst)){
                    case "TeamReadDTO":{
                        $Obj = new TeamReadDTO();
                        $Obj->setID($this->src->getID());
                        $Obj->setName($this->src->getName());
                        $Obj->setState($this->src->getState());
                        $Obj->setCity($this->src->getCity());
                        $Obj->setDistrict($this->src->getDistrict());
                        $Obj->setLocation($this->src->getLocation());
                        $Obj->setMatches($this->src->getMatches());
                        $Obj->setWon($this->src->getWon());
                        $Obj->setLost($this->src->getLost());
                        $Obj->setCoach($this->src->getCoach());

                        return $Obj;
                    }
                }
                break;
            }
            case "TeamCreateDTO":{
                switch(get_class($this->dst)){
                    case "Team": {
                        $Obj = new Team();
                        $Obj->setName($this->src->getName());
                        $Obj->setState($this->src->getState());
                        $Obj->setCity($this->src->getCity());
                        $Obj->setDistrict($this->src->getDistrict());
                        $Obj->setLocation($this->src->getLocation());
                        $Obj->setMatches($this->src->getMatches());
                        $Obj->setWon($this->src->getWon());
                        $Obj->setLost($this->src->getLost());
                        $Obj->setCoach($this->src->getCoach());

                        return $Obj;
                    }
                }
            }

            case "User":{
                switch(get_class($this->dst)){
                    case "UserReadDTO":{
                      $Obj = new UserReadDTO();
                      $Obj->setID($this->src->getID());
                      $Obj->setUsername($this->src->getUsername());
                      $Obj->setFirstname($this->src->getFirstname());
                      $Obj->setLastname($this->src->getLastname());
                      $Obj->setTeam($this->src->getTeam());
                      $Obj->setBirthDate($this->src->getBirthDate());
                      $Obj->setDescription($this->src->getDescription());
                      $Obj->setStatus($this->src->getStatus());
                      $Obj->setRole($this->src->getRole());
                      $Obj->setLastLogin($this->src->getLastLogin());
                      $Obj->setNationality($this->src->getNationality());
                      $Obj->setEntryDate($this->src->getEntryDate());
                      $Obj->setWeight($this->src->getWeight());
                      $Obj->setHeight($this->src->getHeight());
                      
                      return $Obj;
                    }
                }
                break;
            }

            case "Role":{
                switch(get_class($this->dst)){
                    case "RoleReadDTO":{
                        $Obj = new RoleReadDTO();
                        $Obj->setID($this->src->getID());
                        $Obj->setCode($this->src->getCode());
                        $Obj->setEN($this->src->getEN());
                        $Obj->setES($this->src->getES());

                        return $Obj;
                    }
                }
                break;
            }

            case "RoleCreateDTO":{
                switch(get_class($this->dst)){
                    case "Role":{
                        $Obj = new Role();
                        $Obj->setID($this->src->getID());
                        $Obj->setCode($this->src->getCode());
                        $Obj->setEN($this->src->getEN());
                        $Obj->setES($this->src->getES());

                        return $Obj;
                    }
                }
                break;
            }

            case "SecQuestion":
                {
                switch(get_class($this->dst)){
                    case "SecQuestionReadDTO":
                        {
                            $Obj = new SecQuestionReadDTO();
                            $Obj->setID($this->src->getID());
                            $Obj->setEN($this->src->getEN());
                            $Obj->setES($this->src->getES());

                            return $Obj;
                        }
                }
                break;
            }

            case "Match":
                {
                    switch(get_class($this->dst)){
                        case "MatchReadDTO":
                            {
                                $Obj = new MatchReadDTO();
                                $Obj->setID($this->src->getID());
                                $Obj->setMatchDate($this->src->getMatchDate());
                                $Obj->setMatchTime($this->src->getMatchTime());
                                $Obj->setTeam1($this->src->getTeam1());
                                $Obj->setTeam2($this->src->getTeam2());
                                $Obj->setScore1($this->src->getScore1());
                                $Obj->setScore2($this->src->getScore2());
                                $Obj->setDuration($this->src->getDuration());
                                $Obj->setLocation($this->src->getLocation());

                                return $Obj;
                            }
                    }
                    break;
                }
        }
    }
    
}
?>