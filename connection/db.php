<?php
class DB{
    private $host;
    private $db;
    private $user;
    private $password;
    private $charset;
    
    public function __construct(){
        $this->host = 'localhost';
        $this->db = 'your db';
        $this->user = 'your user';
        $this->password = 'your password';
        $this->charset = 'utf8mb4';
    }
    
    public function setHost($Host){
        $this->host = $Host;
    }
    
    public function setDB($DB){
        $this->db = $DB;
    }
    
    public function setUser($User){
        $this->user = $User;
    }
    
    public function setPassword($Password){
        $this->password = $Password;
    }
    
    public function setCharset($Charset){
        $this->charset = $Charset;
    }
    
    public function getHost(){
        return $this->host;
    }
    
    public function getDB(){
        return $this->db;
    }
    
    public function getUser(){
        return $this->user;
    }
    
    public function getCharset(){
        return $this->charset;
    }
    
    public function Connect(){
        $MySQLi = new mysqli($this->host, $this->user, $this->password, $this->db);
        if ($MySQLi->connect_errno) {
            echo "Error DB::Connect(): (" . $MySQLi->connect_errno . ") " . $MySQLi->connect_error;
            return null;
        }

        return $MySQLi;
    }
    
    public function TestConnection(){
    $MySQLi = new mysqli($this->host, $this->user, $this->password, $this->db);
        if ($MySQLi->connect_errno) {
            echo "Error DB::Connect(): (" . $MySQLi->connect_errno . ") " . $MySQLi->connect_error;
            return false;
        }
        
        return true;
    }
}
?>