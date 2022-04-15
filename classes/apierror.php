<?php
class APIError{
    private $id;
    private $message;

    public function __construct($ID){
        $this->id = $ID;
        $this->setMessageByID($ID);
    }

    // |-----------------------Setters----------------------------------|
    public function setID($ID){
        if(!empty($ID)){
            $this->id = $ID;
            return;
        }

        $this->id = 1;
    }

    public function setMessage($Message){
        if(!empty($Message)){
            $this->message = $Message;
            return;
        }
        
        $this->setMessageByID(1);
    }

    public function setMessageByID($ID){
        $Message = "Error " . $ID . ":";
        switch($ID){
            case 1:
                {
                    $Message = $Message . "Value must be integer";
                    break;
                }
            case 2:
                {
                    $Message = $Message . "Value must be float";
                    break;
                }
            case 3:
                {
                    $Message = $Message . "Value must be string";
                    break;
                }
            case 4:
                {
                    $Message = $Message . "Value must be date";
                    break;
                }
            case 5:
                {
                    $Message = $Message . "Value must be datetime";
                    break;
                }
            case 6: 
                {
                    $Message = $Message . "Value must be bool";
                    break;
                }
            case 7:
                {
                    $Message = $Message . "Bad request";
                    break;
                }
            case 8:
                {
                    $Message = "No results found";
                    break;
                }
            case 9:
                {
                    $Message = "Unauthorized";
                    break;
                }
            case 10:
                {
                    $Message = "Forbidden";
                    break;
                }
        }
        $this->setMessage($Message);
    }

    // |-----------------------Getters----------------------------------|
    public function getID(){
        return $this->id;
    }

    public function getMessage(){
        return $this->message;
    }
}
?>