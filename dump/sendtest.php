<?php
include "connection.php";
	
//$sql = "INSERT INTO rfid_table (pilihan)
//VALUES ('".$_POST["pilihan"]."')";

if(array_key_exists('no', $_POST))
{
      $sql  = $dbh->prepare("INSERT INTO rfid_table ( pilihan)");  
}else if(array_key_exists('yes', $_POST)){
      	$sql  = $dbh->prepare("INSERT INTO rfid_table ( pilihan)");
}

if ($dbh->exec($sql)) {
     echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
} 
else{
     echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
} 
	
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>