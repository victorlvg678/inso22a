<?php
class UserReadDTO{
    private $id;
    private $username;
    private $firstname;
    private $lastname;
    private $team;
    private $birthdate;
    private $description;
    private $status;
    private $role;
    private $lastlogin;
    private $nationality;
    private $entrydate;
    private $weight;
    private $height;
    
    public function __construct(){
        $this->id = 0;
        $this->username = 'john.doe';
        $this->firstname = 'John';
        $this->lastname = 'Doe';
        $this->team = 0;
        $this->birthdate = '1900-01-01';
        $this->description = '';
        $this->status = 0;
        $this->role = 0;
        $this->lastlogin = null;
        $this->nationality = "NA";
        $this->entrydate = "1901-01-01";
        $this->weight = 0.0;
        $this->height = 0.0;
    }
    
    // |--------------------Setters--------------------------------------------|
    public function setID($ID){
        if(!empty($ID)){
            $this->id = $ID;
            return;
        }

        $this->id = 1;
    }
    
    public function setUsername($Username){
        if(!empty($Username)){
            $this->username = $Username;
            return;
        }

        $this->username = 'john.doe';
    }
    
    public function setFirstname($Firstname){
        if(!empty($Firstname)){
            $this->firstname = $Firstname;
            return;
        }

        $this->firstname = 'John';
    }
    
    public function setLastname($Lastname){
        if(!empty($Lastname)){
            $this->lastname = $Lastname;
            return;
        }

        $this->lastname = 'Doe';
    }
    
    public function setTeam($Team){
        if(!empty($Team)){
            $this->team = $Team;
            return;
        }

        $this->team = 0;
    }
    
    public function setBirthDate($BirthDate){
        if(!empty($BirthDate)){
            $this->birthdate = $BirthDate;
            return;
        }

        $this->birthdate = '1900-01-01';
    }
    
    public function setDescription($Description){
        if(!empty($Description)){
            $this->description = $Description;
            return;
        }

        $this->description = '';
    }
    
    public function setStatus($Status)
    {
        if($Status){
            $this->status = 1;
            return;
        }

        $this->status = 0;
    }
    
    public function setLastLogin($LastLogin){
        if(!empty($LastLogin)){
            $this->lastlogin = $LastLogin;
            return;
        }
        
        $this->lastlogin = null;
    }
    
    public function setRole($Role){
        if(!empty($Role)){
            $this->role = $Role;
            return;
        }

        $this->role = 0;
    }
    
    public function setNationality($Nationality){
        if(!empty($Nationality)){
            $this->nationality = $Nationality;
            return;
        }

        $this->nationality = "NA";
    }
    
    public function setEntryDate($EntryDate){
        if(!empty($EntryDate)){
            $this->entrydate = $EntryDate;
            return;
        }

        $this->entrydate = '1901-01-01';
    }
    
    public function setWeight($Weight){
        if(!empty($Weight)){
            $this->weight = $Weight;
            return;
        }

        $this->weight = 0.0;
    }
    
    public function setHeight($Height){
        if(!empty($Height)){
            $this->height = $Height;
            return;
        }

        $this->height = 0.0;
    }
    
    public function set($Src){
        if(!empty($Src)){
            echo 'Error UserReadDTO::set(Src): Object is empty';
            return;
        }

        if(array_key_exists("ID", $Src)){
            $this->setID($Src["ID"]);
        }

        if(array_key_exists("Username", $Src)){
            $this->setUsername($Src["Username"]);
        }

        if(array_key_exists("Firstname", $Src)){
            $this->setFirstname($Src["Firstname"]);
        }

        if(array_key_exists("Lastname", $Src)){
            $this->setLastname($Src["Lastname"]);
        }

        if(array_key_exists("Team", $Src)){
            $this->setTeam($Src["Team"]);
        }

        if(array_key_exists("Birthdate", $Src)){
            $this->setBirthdate($Src["BirthDate"]);
        }

        if(array_key_exists("Description", $Src)){
            $this->setDescription($Src["Description"]);    
        }
        
        if(array_key_exists("Status", $Src)){
            $this->setStatus($Src["Status"]);
        }


        if(array_key_exists("LastLogin", $Src)){
            $this->setLastLogin($Src["LastLogin"]);
        }

        if(array_key_exists("Nationality", $Src)){
            $this->setNationality($Src["Nationality"]);
        }

        if(array_key_exists("Height", $Src)){
            $this->setHeight($Src["Height"]);
        }

        if(array_key_exists("Weight", $Src)){
            $this->setWeight($Src["Weight"]);
        }
        
        if(array_key_exists("Role", $Src)){
            $this->setRole($Src["Role"]);
        }
    }
    
    // |---------------------Getters-------------------------------------------|
    public function getID(){
        return $this->id;
    }
    
    public function getUsername(){
        return $this->username;
    }
    
    public function getFirstname(){
        return $this->firstname;
    }
    
    public function getLastname(){
        return $this->lastname;
    }
    
    public function getName(){
        return $this->firstname . ' ' . $this->lastname;
    }
    
    public function getTeam(){
        return $this->team;
    }
    
    public function getBirthdate(){
        return $this->birthdate;
    }
    
    public function getDescription(){
        return $this->description;
    }
    
    public function getStatus(){
        return $this->status;
    }
    
    public function getLastlogin(){
        return $this->lastlogin;
    }

    
    public function getNationality(){
        return $this->nationality;
    }
    
    public function getEntryDate(){
        return $this->entrydate;
    }
    
    public function getWeight(){
        return $this->weight;
    }
    
    public function getHeight(){
        return $this->height;
    }
    
    public function getRole(){
        return $this->role;
    }
    
}
?>