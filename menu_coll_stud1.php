<!DOCTYPE html>
<html>
    <head>
        <?php
        include "connection.php";
        //echo "test req", print_r($_REQUEST),"......";
        ?>
    <meta charset="UTF-8">
    <title></title>
    <!-- <link rel="stylesheet" type="text/css" href="css/style-new.css"> -->
    <link rel="stylesheet" type="text/css" href="css/style-survey.css"/>
    </head>
    <body>
        <form action="survey.php" method="post">
            <input type=hidden name=test value="hello">
                <div style="text-align: center;">
                    <h1>Pilih Jenis Layanan Dibawah Ini</h1>
                        <input type="hidden" name="nama" value="<?php echo $_POST['nama'];?>" />
                        <input type="image" name="layanan"  class="avatar" src="img/menus/locker.png" value="A-1" >
                        <input type=hidden name=test value="hello">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="image" class="avatar" name="layanan" src="img/menus/circulation.png" value="A-2"><br>
                        
                </div>
        </form>
    </body>
</html>