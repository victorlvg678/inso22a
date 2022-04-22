<?php
require_once('../controllers/matchcontroller.php');
$Controller = new MatchController();

if($_SERVER['REQUEST_METHOD'] == 'GET'){
    if(isset($_GET['id'])){
        if(!is_numeric($_GET['id'])){
            echo 'Error: id must be integer';
            return;
        }

        echo $Controller->getByID($_GET['id']);
        return;
    }

    if(isset($_GET['matchdate'])){
        if(empty($_GET['matchdate'])){
            echo 'Error: value cannot be null';
            return;
        }

        echo $Controller->getByMatchDate($_GET['matchdate']);
        return;
    }

    if(isset($_GET['matchtime'])){
        if(empty($_GET['matchtime'])){
            echo 'Error: value cannot be null';
            return;
        }

        echo $Controller->getByMatchTime($_GET['matchtime']);
        return;
    }

    if(isset($_GET['team1'])){
        if(empty($_GET['team1'])){
            echo 'Error: value cannot be null';
            return;
        }

        echo $Controller->getByTeam1($_GET['team1']);
        return;
    }

    if(isset($_GET['team2'])){
        if(empty($_GET['team2'])){
            echo 'Error: value cannot be null';
            return;
        }

        echo $Controller->getByTeam2($_GET['team2']);
        return;
    }

    if(isset($_GET['score1'])){
        if(empty($_GET['score1'])){
            echo 'Error: value cannot be null';
            return;
        }

        echo $Controller->getByScore1($_GET['score1']);
        return;
    }

    if(isset($_GET['score2'])){
        if(empty($_GET['score2'])){
            echo 'Error: value cannot be null';
            return;
        }

        echo $Controller->getByScore2($_GET['score2']);
        return;
    }

    if(isset($_GET['duration'])){
        if(empty($_GET['duration'])){
            echo 'Error: value cannot be null';
            return;
        }

        echo $Controller->getByDuration($_GET['duration']);
        return;
    }

    if(isset($_GET['location'])){
        if(empty($_GET['location'])){
            echo 'Error: value cannot be null';
            return;
        }

        echo $Controller->getByLocation($_GET['location']);
        return;
    }

    echo $Controller->getAll();
    return;
}

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $json = file_get_contents('php://input');

    echo $Controller->createMatch(json_decode($json, true));
    return;
}
?>