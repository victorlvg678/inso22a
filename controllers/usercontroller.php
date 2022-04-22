<?php 
require_once('../repos/mysqluser.php');
require_once('../classes/mapper.php');
require_once('../classes/json.php');
require_once('../models/user.php');
require_once('../dtos/usercreatedto.php');
require_once('../dtos/userreaddto.php');
require_once('../classes/apierror.php');

class UserController{
    private $repo;

    public function __construct(){
        $this->repo = new MYSQLUser();    
    }
    
    public function getByID($ID){
        $items = $this->repo->getByID($ID);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $user = Array();
        $mapper = new Mapper();
        $mapper->setDst(new UserReadDTO());
        $JSON = new JSON();
        $mapper->setSrc($items[0]);
        array_push($user, $mapper->Map());

        return json_encode($JSON->Parse($user));
    }
    
    public function getByUsername($Username){
        $items = $this->repo->getByUsername($Username);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $user = Array();
        $mapper = new Mapper();
        $JSON = new JSON();
        $mapper->setDst(new UserReadDTO());
        $mapper->setSrc($items[0]);
        array_push($user, $mapper->Map());

        return json_encode($JSON->Parse($user));
    }
    
    public function getByFirstname($Firstname){
        $items = $this->repo->getByFirstname($Firstname);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $users = Array();
        $mapper = new Mapper();
        $JSON = new JSON();
        $mapper->setDst(new UserReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($users, $mapper->Map());
        }

        return json_encode($JSON->Parse($users));
    }
    
    public function getByLastname($Lastname){
        $items = $this->repo->getByLastname($Lastname);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }
        
        $users = Array();
        $mapper = new Mapper();
        $JSON = new JSON();
        $mapper->setDst(new UserReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($users, $mapper->Map());
        }
        
        return json_encode($JSON->Parse($users));
    }
    
    public function getByTeam($Team){
        $items = $this->repo->getByTeam($Team);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $users = Array();
        $mapper = new Mapper();
        $JSON = new JSON();
        $mapper->setDst(new UserReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($users, $mapper->Map());
        }

        return json_encode($JSON->Parse($users));
    }
    
    public function getAll(){
        $items = $this->repo->getAll();
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $users = Array();
        $mapper = new Mapper();
        $JSON =  new JSON();
        $mapper->setDst(new UserReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($users, $mapper->Map());
        }

        return json_encode($JSON->Parse($users));
    }

    public function createUser($Src){
        $JSON = new JSON();
        $user = $JSON->ToObject($Src, new UserCreateDTO());
        $mapper = new Mapper();
        $mapper->setSrc($user);
        $mapper->setDst(new User());

        $result = $this->repo->createUser($mapper->Map());

        $mapper->setDst(new UserReadDTO());
        $users = Array();
        for($x = 0; $x < count($result); $x++)
        {
            $mapper->setSrc($result[$x]);
            array_push($users, $mapper->Map());
        }

        return json_encode($JSON->Parse($users));
    }
}    
?>
