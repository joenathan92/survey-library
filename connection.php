<?php
$host="192.168.110.222";
$port=3306;
$socket="";
$user="candid";
$password="BlueBerry123";
$dbname="rfid_survey_app";

try {
    $dbh = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }
?>