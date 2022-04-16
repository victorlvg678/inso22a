<?php
require_once('../repos/mysqlsecquestion.php');
require_once('../classes/mapper.php');
require_once('../classes/json.php');
require_once('../models/secquestion.php');
require_once('../dtos/secquestionreaddto.php');
require_once('../classes/apierror.php');

class SecQuestionController{
    private $repo;

    public function __construct(){
        $this->repo =  new MYSQLSecQuestion();
    }

    public function getAll(){
        $items = $this->repo->getAll();
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $secquestions = Array();
        $mapper = new Mapper();
        $JSON = new JSON();
        $mapper->setDst(new SecQuestionReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($secquestions, $mapper->Map());
        }

        return json_encode($JSON->Parse($secquestions));
    }

    public function getByID($ID){
        $items = $this->repo->getByID($ID);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $secquestions = Array();
        $mapper = new Mapper();
        $JSON = new JSON();
        $mapper->setDst(new SecQuestionReadDTO());
        $mapper->setSrc($items[0]);
        array_push($secquestions, $mapper->Map());
        

        return json_encode($JSON->Parse($secquestions));
    }

    public function getByEN($EN){
        $items = $this->repo->getByEN($EN);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $secquestions = Array();
        $mapper = new Mapper();
        $JSON = new JSON();
        $mapper->setDst(new SecQuestionReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($secquestions, $mapper->Map());
        }

        return json_encode($JSON->Parse($secquestions));
    }

    public function getByES($ES){
        $items = $this->repo->getByES($ES);
        if(count($items) <= 0){
            $Error = new APIError(8);
            return $Error->getMessage();
        }

        $secquestions = Array();
        $mapper = new Mapper();
        $JSON = new JSON();
        $mapper->setDst(new SecQuestionReadDTO());

        for($x = 0; $x < count($items); $x++){
            $mapper->setSrc($items[$x]);
            array_push($secquestions, $mapper->Map());
        }

        return json_encode($JSON->Parse($secquestions));
    }
}
?>