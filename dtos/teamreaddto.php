<?php
class TeamReadDTO{
    private $id;
    private $name;
    
    public function __construct(){
        $this->id = 1;
        $this->name = "NA";
    }
    
    // |--------------------Setters--------------------------------------------|
    public function setID($ID){
        if(!empty($ID)){
            $this->id = $ID;
            return;
        }
        $this->id = 1;
    }
    
    public function setName($Name){
        if(!empty($Name)){
            $this->name = $Name;
            return;
        }
        $this->name = "NA";
    }
    
    public function set($Src){
        if(!empty($Src)){
            echo "Error TeamReadDTO::set(Src): Object is empty";
            return;
        }
        if(array_key_exists("ID", $Src)){
            $this->setID($Src["ID"]);    
        }
        if(array_key_exists("Name", $Src)){
            $this->setName($Src["Name"]);    
        }
    }
    
    // |------------------------Getters----------------------------------------|
    public function getID(){
        return $this->id;
    }
    
    public function getName(){
        return $this->name;
    }
    
}
?>