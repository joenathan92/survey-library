<script type="text/javascript"> 
	setTimeout("location.href='index.php'", 1000);
</script>
<?php

include "connection.php";
//print_r($_REQUEST);//exit;

$l = strlen($_REQUEST['nama']);
$nama = $_REQUEST['nama'];
//$layanan = $_REQUEST['layanan'];

if ($_POST['layanan']=='Administrasi Perkuliahan')
{
	$q = "A-1";
}
else
{
	$q = "A-2";
}

if ($_REQUEST['answer']=='no')
	{
		if ($l<10)
			$q = "insert into rfid_table (ukridaID, layanan, pilihan) values ('$nama','$q','no')";
		else
			$q = "insert into rfid_table (rfid, layanan, pilihan) values ('$nama','$q','no')";
		
			//$q = "insert into rfid_table (layanan) values (".$_REQUEST['nama'].",'A-1')";	
	}
else
	{
		if ($l<10)
			$q = "insert into rfid_table (ukridaID, layanan, pilihan) values ('$nama','$q','yes')";
		else
			$q = "insert into rfid_table (rfid, layanan, pilihan) values ('$nama','$q','yes')";

		//$q = "insert into rfid_table (layanan) values (".$_REQUEST['nama'].",'A-2')";
	}

//echo "q=",$q; //exit;

if ($dbh->query($q) == true ) echo "<script type= 'text/javascript'>alert('Thank You Your Input ');</script>";
else  echo "<script type= 'text/javascript'>alert('Input Failed, Please Try Again');</script>";
 
?>