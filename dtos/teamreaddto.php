<?php
class TeamReadDTO{
    private $id;
    private $name;
    private $state;
    private $city;
    private $district;
    private $location;
    private $coach;
    private $matches;
    private $won;
    private $lost;
    
    public function __construct(){
        $this->id = 0;
        $this->name = "NA";
        $this->state = "NA";
        $this->city = "NA";
        $this->district = "NA";
        $this->location = "NA";
        $this->coach = 0;
        $this->matches = 0;
        $this->won = 0;
        $this->lost = 0;
    }
    
    // |--------------------Setters--------------------------------------------|
    public function setID($ID){
        if(!empty($ID)){
            $this->id = $ID;
            return;
        }
        
        $this->id = 0;
    }
    
    public function setName($Name){
        if(!empty($Name)){
            $this->name = $Name;
            return;
        }

        $this->name = "NA";
    }

    public function setState($State){
        if(!empty($State)){
            $this->state = $State;
            return;
        }

        $this->state = "NA";
    }

    public function setCity($City){
        if(!empty($City)){
            $this->city = $City;
            return;
        }

        $this->city = "NA";
    }
    
    public function setDistrict($District){
        if(!empty($District)){
            $this->district = $District;
            return;
        }

        $this->district = "NA";
    }
    
    public function setLocation($Location){
        if(!empty($Location)){
            $this->location = $Location;
            return;
        }

        $this->location = "NA";
    }

    public function setMatches($Matches){
        if(!empty($Matches)){
            $this->matches = $Matches;
            return;
        }

        $this->matches = 0;
    }

    public function setWon($Won){
        if(!empty($Won)){
            $this->won = $Won;
            return;
        }

        $this->won = 0;
    }

    public function setLost($Lost){
        if(!empty($Lost)){
            $this->lost = $Lost;
            return;
        }

        $this->lost = 0;
    }

    public function setCoach($Coach){
        if(!empty($Coach)){
            $this->coach = $Coach;
            return;
        }

        $this->coach = 0;
    }

    public function set($Src){
        if(empty($Src)){
            echo "Error TeamReadDTO::set(Src): Object is empty";
            return;
        }

        if(array_key_exists("ID", $Src)){
            $this->setID($Src["ID"]);    
        }

        if(array_key_exists("Name", $Src)){
            $this->setName($Src["Name"]);    
        }

        if(array_key_exists("State", $Src)){
            $this->setState($Src["State"]);
        }

        if(array_key_exists("City", $Src)){
            $this->setCity($Src["City"]);
        }

        if(array_key_exists("District", $Src)){
            $this->setDistrict($Src["District"]);
        }

        if(array_key_exists("Location", $Src)){
            $this->setLocation($Src["Location"]);
        }

        if(array_key_exists("Matches", $Src)){
            $this->setMatches($Src["Matches"]);
        }

        if(array_key_exists("Won", $Src)){
            $this->setWon($Src["Won"]);
        }

        if(array_key_exists("Lost", $Src)){
            $this->setLost($Src["Lost"]);
        }

        if(array_key_exists("Coach", $Src)){
            $this->setCoach($Src["Coach"]);
        }
    }
    
    // |------------------------Getters----------------------------------------|
    public function getID(){
        return $this->id;
    }
    
    public function getName(){
        return $this->name;
    }
    
    public function getState(){
        return $this->state;
    }

    public function getCity(){
        return $this->city;
    }

    public function getDistrict(){
        return $this->district;
    }

    public function getLocation(){
        return $this->location;
    }

    public function getCoach(){
        return $this->coach;
    }

    public function getMatches(){
        return $this->matches;
    }

    public function getWon(){
        return $this->won;
    }

    public function getLost(){
        return $this->lost;
    }
}
?>