<?php
class SecQuestion{
    private $id;
    private $en;
    private $es;
    
    public function __construct(){
        $this->id = 1;
        $this->en = "NA";
        $this->es = "NA";
    }
    
    // |-----------------Setters-----------------------------------------------|
    public function setID($ID)
    {
        if(!empty($ID)){
            $this->id = $ID;
            return;
        }
        $this->id = 1;
    }
    
    public function setEN($EN)
    {
        if(!empty($EN))
        {
            $this->en = $EN;
            return;
        }
        $this->en = "NA";
    }
    
    public function setES($ES)
    {
        if(!empty($ES))
        {
            $this->es = $ES;
            return;
        }
        $this->es = "NA";
    }
    
    public function set($Src){
        if(!empty($Src)){
            echo "Error SecQuestion::set(SecQuestion): SecQuestion is empty";
            return;
        }
        setID($Src["ID"]);
        setEN($Src["EN"]);
        setES($Src["Es"]);
    }
    
    // |----------------Getters------------------------------------------------|
    public function getID()
    {
        return $this->id;
    }
    
    public function getEN()
    {
        return $this->en;
    }
    
    public function getES()
    {
        return $this->es;
    }
    
}
?>