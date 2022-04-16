<?php
class RoleReadDTO{
    private $id;
    private $code;
    private $en;
    private $es;

    public function __construct(){
        $this->id = 0;
        $this->code = "NA";
        $this->en = "NA";
        $this->es = "NA";
    }

    // |------------------Setters--------------------------------|
    public function setID($ID){
        if(!empty($ID)){
            $this->id = $ID;
            return;
        }

        $this->id = 0;
    }

    public function setCode($Code){
        if(!empty($Code)){
            $this->code = $Code;
            return;
        }

        $this->code = "NA";
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

    public function set($Src){
        if(!empty($Src)){
            echo "Error RoleReadDTO::set(Src): Object is empty";
            return;
        }

        if(array_key_exists("ID", $Src)){
            $this->setID($Src["ID"]);
        }

        if(array_key_exists("Code", $Src)){
            $this->setCode($Src["Code"]);
        }

        if(array_key_exists("EN", $Src)){
            $this->setEN($Src["EN"]);    
        }
        
        if(array_key_exists("ES", $Src)){
            $this->setES($Src["ES"]);
        }
    }

    // |---------------------Getters------------------------------|
    public function getID(){
        return $this->id;
    }

    public function getCode(){
        return $this->code;
    }

    public function getEN(){
        return $this->en;
    }

    public function getES(){
        return $this->es;
    }
}
?>