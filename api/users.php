<?php
require_once('../controllers/usercontroller.php');
$Controller = new UserController();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
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

    if(isset($_GET['firstname'])){
        if(empty($_GET['firstname'])){
            echo 'Error: value cannot be null';
            return;
        }
        
        echo $Controller->getByFirstname($_GET['firstname']);
        return;
    }

    if(isset($_GET['lastname'])){
        if(empty($_GET['lastname'])){
            echo 'Error: value cannot be null';
            return;
        }
        
        echo $Controller->getByLastname($_GET['lastname']);
        return;
    }

    if(isset($_GET['email'])){
        if(empty($_GET['email'])){
            echo 'Error: value cannot be null';
            return;
        }
        
        echo $Controller->getByEmail($_GET['email']);
        return;
    }

    if(isset($_GET['team'])){
        if(empty($_GET['team'])){
            echo 'Error: value cannot be null';
            return;
        }
        
        echo $Controller->getByTeam($_GET['team']);
        return;
    }


    echo $Controller->getAll();
    return;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $json = file_get_contents('php://input');

    echo $Controller->createUser(json_decode($json, true));
    return;
}
        
?>