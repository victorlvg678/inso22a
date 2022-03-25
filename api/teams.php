<?php
require_once('../controllers/teamcontroller.php');
$Controller = new TeamController();

if(isset($_GET['id'])){
    if(!is_numeric($_GET['id'])){
        echo 'Error: id must be integer';
        return;
    }
    echo $Controller->getByID($_GET['id']);
    return;
}

if(isset($_GET['name'])){
    if(empty($_GET['name'])){
        echo 'Error: value cannot be null';
        return;
    }
    echo $Controller->getByName($_GET['name']);
    return;
}

echo $Controller->getAll();
    
?>