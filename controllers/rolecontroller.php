<?php
require_once('../repos/mysqlrole.php');
require_once('../classes/mapper.php');
require_once('../classes/json.php');
require_once('../models/role.php');
require_once('../dtos/rolereaddto.php');
require_once('../classes/apierror.php');

class RoleController{
    private $repo;

    public function __construct(){
        $this->repo = new MYSQLRole();
    }

    public function getAll(){
        $items = $this->repo->getAll();
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $roles = Array();
        $mapper = new Mapper();
        $JSON = new JSON();
        $mapper->setDst(new RoleReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($roles, $mapper->Map());
        }

        return json_encode($JSON->Parse($roles));
    }

    public function getByID($ID){
        $items = $this->repo->getByID($ID);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $roles = Array();
        $mapper = new Mapper();
        $JSON = new JSON();
        $mapper->setDst(new RoleReadDTO());
        $mapper->setSrc($items[0]);
        array_push($roles, $mapper->Map());

        return json_encode($JSON->Parse($roles));
    }

    public function getByCode($Code){
        $items = $this->repo->getByCode($Code);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $roles = Array();
        $mapper = new Mapper();
        $JSON = new JSON();
        $mapper->setDst(new RoleReadDTO());
        $mapper->setSrc($items[0]);
        array_push($roles, $mapper->Map());

        return json_encode($JSON->Parse($roles));
    }

    public function getByEN($EN){
        $items = $this->repo->getByEN($EN);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $roles = Array();
        $mapper = new Mapper();
        $JSON = new JSON();
        $mapper->setDst(new RoleReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($roles, $mapper->Map());
        }

        return json_encode($JSON->Parse($roles));
    }

    public function getByES($ES){
        $items = $this->repo->getByES($ES);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $roles = Array();
        $mapper = new Mapper();
        $JSON = new JSON();
        $mapper->setDst(new RoleReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($roles, $mapper->Map());
        }

        return json_encode($JSON->Parse($roles));
    }
}
?>