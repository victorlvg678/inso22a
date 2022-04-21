<?php
require_once('../controllers/rolecontroller.php');
$Controller = new RoleController();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['id'])){
        if(!is_numeric($_GET['id'])){
            echo 'Error: id must be integer';
            return;
        }

        echo $Controller->getByID($_GET['id']);
        return;
    }

    if(isset($_GET['code'])){
        if(empty($_GET['code'])){
            echo 'Error: value cannot be null';
            return;
        }

        echo $Controller->getByCode($_GET['code']);
        return;
    }

    if(isset($_GET['en'])){
        if(empty($_GET['en'])){
            echo 'Error: value cannot be null';
            return;
        }

        echo $Controller->getByEN($_GET['en']);
        return;
    }

    if(isset($_GET['es'])){
        if(empty($_GET['es'])){
            echo 'Error: value cannot be null';
            return;
        }

        echo $Controller->getByES($_GET['es']);
        return;
    }

    echo $Controller->getAll();
    return;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $json = file_get_contents('php://input');

    echo $Controller->createRole(json_decode($json, true));
    return;
}

?>