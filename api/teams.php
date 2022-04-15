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

if(isset($_GET['state'])){
    if(empty($_GET['state'])){
        echo 'Error: value cannot be null';
        return;
    }

    echo $Controller->getByState($_GET['state']);
    return;
}

if(isset($_GET['city'])){
    if(empty($_GET['city'])){
        echo 'Error: value cannot be null';
        return;
    }

    echo $Controller->getByCity($_GET['city']);
    return;
}

if(isset($_GET['district'])){
    if(empty($_GET['district'])){
        echo 'Error: value cannot be null';
        return;
    }

    echo $Controller->getByDistrict($_GET['district']);
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

if(isset($_GET['matches'])){
    if(!is_numeric($_GET['matches'])){
        echo 'Error: matches must be integer';
        return;
    }

    echo $Controller->getByMatches($_GET['matches']);
    return;
}

if(isset($_GET['won'])){
    if(!is_numeric($_GET['won'])){
        echo 'Error: won must be integer';
        return;
    }

    echo $Controller->getByWon($_GET['won']);
    return;
}

if(isset($_GET['lost'])){
    if(!is_numeric($_GET['lost'])){
        echo 'Error: lost must be integer';
        return;
    }

    echo $Controller->getByLost($_GET['lost']);
    return;
}

if(isset($_GET['coach'])){
    if(empty($_GET['coach'])){
        echo 'Error: value cannot be null';
        return;
    }
    
    echo $Controller->getByCoach($_GET['coach']);
    return;
}

echo $Controller->getAll();
    
?>