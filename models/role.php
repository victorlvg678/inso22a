<?php
class Role{
    private $id;
    private $cod;
    private $en;
    private $es;
    
    public function __construct(){
        $this->id = 0;
        $this->cod = "NA";
        $this->en = "NA";
        $this->es = "NA";
    }
    
    // |----------------------Setters------------------------------------------|
    public function setID($ID){
        if(!empty($ID)){
            $this->id = $ID;
            return;
        }
        $this->id = 0;
    }
    
    public function setEN($EN){
        if(!empty($EN)){
            $this->en = $EN;
            return;
        }
        $this->en = "NA";
    }
    
    public function setES($ES){
        if(!empty($ES)){
            $this->es = $ES;
            return;
        }
        $this->es = "NA";
    }
    
    public function setCOD($COD){
        if(!empty($COD)){
            $this->cod = $COD;
            return;
        }
        $this->cod = "NA";
    }
    
    public function set($Src){
        if(!empty($Src)){
            echo "Error Role::set(Role): Role is empty";
            return;
        }
        setID($Src["ID"]);
        setCOD($Src["COD"]);
        setEN($Src["EN"]);
        setES($Src["Es"]);
    }
    
    // |------------------------Getters----------------------------------------|
    public function getID(){
        return $this->id;
    }
    
    public function getCOD(){
        return $this->cod;
    }
    
    public function getEN(){
        return $this->en;
    }
    
    public function getES(){
        return $this->es;
    }
}
?>