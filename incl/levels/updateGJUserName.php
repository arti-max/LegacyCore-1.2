<?php

$udid = $_POST["udid"];
$userName = $_POST["userName"];
$secret = $_POST["secret"];

$userID = $Lib->getUserID($udid, $userName);

echo $userID;

?>