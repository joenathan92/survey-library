<script type="text/javascript"> 
 setTimeout("location.href='index.php'", 2000);
</script>
<?php

include "connection.php";
print_r($_REQUEST);//exit;


if ($_REQUEST['answer']=='no')
	{
	$q = "insert into rfid_table (nama,pilihan) values (".$_REQUEST['nama'].",'no')";
	}
else
	{
	$q = "insert into rfid_table (nama,pilihan) values (".$_REQUEST['nama'].",'yes')";
	}

if ($dbh->query($q) == true ) echo "<script type= 'text/javascript'>alert('New Record Inserted Successfully');</script>";
else  echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
 

/*	
if(isset($_POST["no"])){
      $sql  = $dbh->prepare("INSERT INTO rfid_table ( pilihan)");  
}else if(isset($_POST["yes"])){
      $sql  = $dbh->prepare("INSERT INTO rfid_table ( pilihan)");
}


if ($dbh->exec($sql)) {
} 
else{
     echo "<script type= 'text/javascript'>alert('Data not successfully Inserted.');</script>";
} 
	
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	*/
?>