<?php
$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="rfid3";

try {
    $dbh = new PDO("mysql:host={$host};port={$port};dbname={$dbname};$password={$password}",$username);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line

 
$sql = "INSERT INTO rfid_table (pilihan)
VALUES ('".$_POST["pilihan"]."')";

if(isset($_POST["no"])){
      $allowed  = $dbh->prepare("INSERT INTO rfid_table (pilihan)");
}

if(isset($_POST["yes"])){
      $allowed  = $dbh->prepare("INSERT INTO rfid_table (pilihan)");
}

if ($dbh->query($sql)) {
     echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
} 
else{
     echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
}

    $dbh = null;
    }
catch(PDOException $e)
    {
    echo $e->getMessage();
    }


?>