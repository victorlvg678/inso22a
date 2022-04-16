<?php
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
            }
        }
        
        return $objects;
    }
}
?>