<?php
$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="rfid";

try {
    $dbh = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line

 
//$sql = 'INSERT INTO rfid_table (pilihan) VALUES $_POST["pilihan"]';

if(isset($_POST["no"])){
      $sql  = $dbh->prepare("INSERT INTO rfid_table (pilihan)");
}

if(isset($_POST["yes"])){
      $sql  = $dbh->prepare("INSERT INTO rfid_table (pilihan)");
}

    $dbh->exec($sql){ 
     echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
} 


    $dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }


?>