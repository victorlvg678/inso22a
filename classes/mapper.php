<?php
require_once("../models/team.php");
require_once("../dtos/teamreaddto.php");
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
                        return $Obj;
                    }
                }
                break;
            }
        }
    }
    
}
?>