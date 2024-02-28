<?php



$userQuery = "SELECT * FROM user";

$userstatement = $mysqlClient->prepare($userQuery);

$userstatement->execute();

$users = $userstatement->fetchAll();
require_once(__DIR__ . "/../views/admin/admin.view.php");
