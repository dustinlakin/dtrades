<?php
require_once 'helpers/db.php';
require_once 'models/user.class.php';

$method = $_GET["m"];


switch ($method) {
    case "show":
        $id = $_GET["id"];
        $user = new user(1);
        require_once 'views/user/show.php';
        break;
    case "login":
        break;
    default:
        break;
}


?>
