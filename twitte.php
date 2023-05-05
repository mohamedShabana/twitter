<?php 
  include './include/header.php';
?>
<div class="container"> 
    <div class="row">
        <div class="col-3">M</div>
        <div class="col-6">
            <?php
                $tw= $_POST['artic'];
                $host= "localhost";
                $user="root";
                $pass="";
                $db="twitter";
                $cxn= mysqli_connect($host,$user,$pass,$db)
                    or die("Cann't connect DB");
                $sql = "insert into twitte(twit_text) values($tw)";
                $cxn->exec($sql);
                
            ?>
        </div>
        <div class="col-3">L</div>
    </div>
</div>
<?php 
include './include/footer.php';
?>