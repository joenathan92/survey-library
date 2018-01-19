<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

<?php
if(isset($_POST["submit"])){
$host="127.0.0.1";
$port=3306;
$socket="";
$user="root";
$password="";
$dbname="rfid";

try {
    $dbh = new PDO("mysql:host={$host};port={$port};dbname={$dbname}", $user, $password);

    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // <== add this line

 
$sql = "INSERT INTO rfid_table (nama)
VALUES ('".$_POST["nama"]."')";


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

}
?>
<div id="main">
<h1>Tap RFID Card into RFID Form</h1>
<div id="login">
<h2>RFID Form</h2>
<hr/>
<form action="" method="post">
  <input type="text" name="nama" id="name" required="required" placeholder="Please Enter RFID Card"/><br /><br />
<input type="submit" value=" Submit " name="submit"/><br />
</form>
</div>
</div>
</body>
</html>
