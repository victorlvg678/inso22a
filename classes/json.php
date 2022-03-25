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
                case "Team":
                    {
                        $object["id"] = $Src[$x]->getID();
                        $object["name"] = $Src[$x]->getName();
                        array_push($objects, $object);
                        $object = Array();
                        break;
                    }
                case "TeamReadDTO":
                    {
                        $object["id"] = $Src[$x]->getID();
                        $object["name"] = $Src[$x]->getName();
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