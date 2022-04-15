<?php
require_once('../controllers/usercontroller.php');
$Controller = new UserController();

if(isset($_GET['id'])){
    if(!is_numeric($_GET['id'])){
        echo 'Error: id must be integer';
        return;
    }

    echo $Controller->getById($_GET['id']);
    return;
}

if(isset($_GET['username'])){
    if(empty($_GET['username'])){
        echo 'Error: value cannot be null';
        return;
    }
    
    echo $Controller->getByUsername($_GET['username']);
    return;
}

echo $Controller->getAll();
    
?>