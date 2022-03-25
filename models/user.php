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
        $this->team = 1;
        $this->birthdate = '1900-01-01';
        $this->description = '';
        $this->status = 0;
        $this->notify= 0;
        $this->password = "80413493fbb88c6e2e77b5de4ff5d6b760afa0ac03f2ca042b28e8db2e40710b";
        $this->salt = "M6a6sxbVk78R71MyJrkRdoPHSif8dKx6";
        $this->role = 1;
        $this->lastlogin = null;
        $this->qid1 = 1;
        $this->qid2 = 2;
        $this->qid3 = 3;
        $this->qid4 = 4;
        $this->qa1 = "QA1";
        $this->qa2 = "QA2";
        $this->qa3 = "QA3";
        $this->qa4 = "QA4";
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
        $this->team = 1;
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
        $this->role = 1;
    }
    
    public function setQID1($QID1){
        if(!empty($QID1)){
            $this->qid1 = $QID1;
            return;
        }
        $this->qid1 = 1;
    }
    
    public function setQID2($QID2){
        if(!empty($QID2)){
            $this->qid2 = $QID2;
            return;
        }
        $this->qid2 = 2;
    }
    
    public function setQID3($QID3){
        if(!empty($QID3)){
            $this->qid3 = $QID3;
            return;
        }
        $this->qid3 = 3;
    }
    
    public function setQID4($QID4){
        if(!empty($QID4)){
            $this->qid4 = $QID4;
            return;
        }
        $this->qid4 = 4;
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
            echo 'Error User::set(User): User is empty';
            return;
        }
        setID($Src["ID"]);
        setUsername($Src["Username"]);
        setFirstname($Src["Firstname"]);
        setLastname($Src["Lastname"]);
        setTeam($Src["Team"]);
        setBirthdate($Src["BirthDate"]);
        setDescription($Src["Description"]);
        setStatus($Src["Status"]);
        setNotify($Src["Notify"]);
        setLastLogin($Src["LastLogin"]);
        setQID1($Src["QID1"]);
        setQID2($Src["QID2"]);
        setQID3($Src["QID3"]);
        setQID4($Src["QID4"]);
        setPasword($Src["Password"]);
        setSalt($Src["Salt"]);
        setNationality($Src["Nationality"]);
        setHeight($Src["Height"]);
        setWeight($Src["Weight"]);
        setRole($Src["Role"]);
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