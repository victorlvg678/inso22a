<?php
class User{
    private $id;
    private $username;
    private $firstname;
    private $lastname;
    private $team;
    private $birthdate;
    private $description;
    private $status;
    private $notify;
    private $password;
    private $salt;
    private $role;
    private $lastlogin;
    private $qid1;
    private $qid2;
    private $qid3;
    private $qid4;
    private $qa1;
    private $qa2;
    private $qa3;
    private $qa4;
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
        $this->notify= 0;
        $this->password = "80413493fbb88c6e2e77b5de4ff5d6b760afa0ac03f2ca042b28e8db2e40710b";
        $this->salt = "M6a6sxbVk78R71MyJrkRdoPHSif8dKx6";
        $this->role = 0;
        $this->lastlogin = null;
        $this->qid1 = 0;
        $this->qid2 = 0;
        $this->qid3 = 0;
        $this->qid4 = 0;
        $this->qa1 = "NA";
        $this->qa2 = "NA";
        $this->qa3 = "NA";
        $this->qa4 = "NA";
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
    
    public function setNotify($Notify){
        if($Notify){
            $this->notify = 1;
            return;
        }

        $this->notify = 0;
    }
    
    public function setLastLogin($LastLogin){
        if(!empty($LastLogin)){
            $this->lastlogin = $LastLogin;
            return;
        }
        
        $this->lastlogin = null;
    }
    
    public function setPassword($Password){
        if(!empty($Password)){
            $this->password = $Password;
            return;
        }

        $this->password = "80413493fbb88c6e2e77b5de4ff5d6b760afa0ac03f2ca042b28e8db2e40710b";
    }
    
    public function setSalt($Salt){
        if(!empty($Salt)){
            $this->salt = $Salt;
            return;
        }

        $this->salt = "M6a6sxbVk78R71MyJrkRdoPHSif8dKx6";
    }
    
    public function setRole($Role){
        if(!empty($Role)){
            $this->role = $Role;
            return;
        }

        $this->role = 0;
    }
    
    public function setQID1($QID1){
        if(!empty($QID1)){
            $this->qid1 = $QID1;
            return;
        }

        $this->qid1 = 0;
    }
    
    public function setQID2($QID2){
        if(!empty($QID2)){
            $this->qid2 = $QID2;
            return;
        }

        $this->qid2 = 0;
    }
    
    public function setQID3($QID3){
        if(!empty($QID3)){
            $this->qid3 = $QID3;
            return;
        }

        $this->qid3 = 0;
    }
    
    public function setQID4($QID4){
        if(!empty($QID4)){
            $this->qid4 = $QID4;
            return;
        }

        $this->qid4 = 0;
    }

    public function setQA1($QA){
        if(!empty($QA)){
            $this->qa1 = $QA;
            return;
        }

        $this->qa1 = "N/A";
    }

    public function setQA2($QA){
        if(!empty($QA)){
            $this->qa2 = $QA;
            return;
        }

        $this->qa2 = "N/A";
    }

    public function setQA3($QA){
        if(!empty($QA)){
            $this->qa3 = $QA;
            return;
        }

        $this->qa3 = "N/A";
    }
    public function setQA4($QA){
        if(!empty($QA)){
            $this->qa4 = $QA;
            return;
        }

        $this->qa4 = "N/A";
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
        if(empty($Src)){
            echo 'Error User::set(User): User is empty';
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

        if(array_key_exists("Notify", $Src)){
            $this->setNotify($Src["Notify"]);
        }

        if(array_key_exists("LastLogin", $Src)){
            $this->setLastLogin($Src["LastLogin"]);
        }

        if(array_key_exists("QID1", $Src)){
            $this->setQID1($Src["QID1"]);
        }

        if(array_key_exists("QID2", $Src)){
            $this->setQID2($Src["QID2"]);    
        }

        if(array_key_exists("QID3", $Src)){
            $this->setQID3($Src["QID3"]);
        }

        if(array_key_exists("QID4", $Src)){
            $this->setQID4($Src["QID4"]);    
        }

        if(array_key_exists("QA1", $Src)){
            $this->setQA1($Src["QA1"]);
        }

        if(array_key_exists("QA2", $Src)){
            $this->setQA2($Src["QA2"]);
        }

        if(array_key_exists("QA3", $Src)){
            $this->setQA3($Src["QA3"]);
        }

        if(array_key_exists("QA4", $Src)){
            $this->setQA4($Src["QA4"]);
        }

        if(array_key_exists("Password", $Src)){
            $this->setPasword($Src["Password"]);
        }

        if(array_key_exists("Salt", $Src)){
            $this->setSalt($Src["Salt"]);
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
    
    public function getNotify(){
        return $this->notify;
    }
    
    public function getLastlogin(){
        return $this->lastlogin;
    }

    public function getQID1(){
        return $this->qid1;
    }
    
    public function getQID2(){
        return $this->qid2;
    }
    
    public function getQID3(){
        return $this->qid3;
    }
    
    public function getQID4(){
        return $this->qid4;
    }    
    
    public function getQA1(){
        return $this->qa1;
    }
    
    public function getQA2(){
        return $this->qa2;
    }
    
    public function getQA3(){
        return $this->qa3;
    }
    
    public function getQA4(){
        return $this->qa4;
    }
    
    public function getPassword(){
        return $this->password;
    }
    
    public function getSalt(){
        return $this->salt;
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