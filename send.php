<script type="text/javascript"> 
	// setTimeout("location.href='index.php'", 1000);
</script>
<?php

include "connection.php";
print_r($_REQUEST);//exit;

$l = strlen($_REQUEST['nama']);
$nama = $_REQUEST['nama'];
// $layanan = $_REQUEST['layanan'];

// $q='';

	if ($_POST['layanan'] =='circulation')
		{
			$q = "E-1";
		}
	else
		{
			$q = "E-2";
		}

if ($_REQUEST['answer']=='strongly_agree')
	{
		if ($l<10)
			$q = "insert into rfid_table (ukridaID, layanan, pilihan) values ('$nama','$q','strongly_agree')";
		else
			$q = "insert into rfid_table (rfid, layanan, pilihan) values ('$nama','$q','strongly_agree')";
		
			//$q = "insert into rfid_table (layanan) values (".$_REQUEST['nama'].",'A-1')";	
	}
	elseif ($_REQUEST['answer'] == 'agree')
	{
		if ($l<10)
			$q = "insert into rfid_table (ukridaID, layanan, pilihan) values ('$nama','$q','agree')";
		else
			$q = "insert into rfid_table (rfid, layanan, pilihan) values ('$nama','$q','agree')";

		//$q = "insert into rfid_table (layanan) values (".$_REQUEST['nama'].",'A-2')";
	}
	elseif ($_REQUEST['answer'] == 'disagree')
	{
		if ($l<10)
			$q = "insert into rfid_table (ukridaID, layanan, pilihan) values ('$nama','$q','disagree')";
		else
			$q = "insert into rfid_table (rfid, layanan, pilihan) values ('$nama','$q','disagree')";

		//$q = "insert into rfid_table (layanan) values (".$_REQUEST['nama'].",'A-2')";
	}
	else
	{
		if ($l<10)
			$q = "insert into rfid_table (ukridaID, layanan, pilihan) values ('$nama','$q','strongly_disagree')";
		else
			$q = "insert into rfid_table (rfid, layanan, pilihan) values ('$nama','$q','strongly_disagree')";

		//$q = "insert into rfid_table (layanan) values (".$_REQUEST['nama'].",'A-2')";
	}


echo "q=",$q; //exit;

if ($dbh->query($q) == true ) echo "<script type= 'text/javascript'>alert('Thank You Your Input ');</script>";
else  echo "<script type= 'text/javascript'>alert('Input Failed, Please Try Again');</script>";
 
?>