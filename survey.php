<!DOCTYPE html>
<html>
    <head>
        <?php
        include "connection.php";
        //echo "test req", print_r($_REQUEST),"......";
        ?>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/style-survey.css"/>
    </head>
    <body>
    <?php
        //echo "layanan =", print_r($_REQUEST),"......";
        //$layanan = $_REQUEST['layanan'];
        
        if ($_POST['layanan']=='A-1')
        {
            $q = "Administrasi Perkuliahan";
        }
        else
        {
            $q = "Administrasi Mahasiswa";
        }

    ?>
        <form action="send.php" method="post">
            <input type=hidden name=test value="hello">
            <input type=hidden name=layanan value="<?php echo $q;?>"/>
                <div style="text-align: center;">
                    <h1>Apakah Anda Puas Dengan Layanan <?php echo $q;?> ? </h1>
                    <input type="hidden" name="nama" value="<?php echo $_POST['nama'];?>" />
                    <input type="image" class="avatar" name="answer" src="img/survey/str_agree.png" value="no" >
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="image" class="avatar" name="answer" src="img/survey/agree.png" value="yes">
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="image" class="avatar" name="answer" src="img/survey/disagree.png" value="no" >
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <input type="image" class="avatar" name="answer" src="img/survey/str_disagree" value="yes"><br>
                </div>
        </form>
    </body>
</html>