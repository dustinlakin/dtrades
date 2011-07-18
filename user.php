<?php
require_once 'helpers/db.php';
require_once 'models/user.class.php';

$method = $_GET["m"];

switch ($method) {
    case "show":
        $id = $_GET["id"];
        $user = new user($id);
        require_once 'views/user/show.php';
        break;
    case "create":
        $user = new user();
        $save = array(
            "id" => 5,
            "name"=> "dustin",
            "email"=>"dlakin@uci.edu"
        );
        $user->createUser($save);
        break;
    default:
        break;
}


?>
