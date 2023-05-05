<?php 
    $host= "localhost";
    $user="root";
    $pass="";
    $db="twitter";
    $cxn= mysqli_connect($host,$user,$pass,$db)
        or die("Cann't connect DB");
    $sql= "select * from twitte";
    $result = mysqli_query($cxn, $sql);
    while($row= mysqli_fetch_assoc($result)){
        extract($row);
?>
<div class="card m-2">
  <div class="card-body">
    <?php 
        echo $twit_text;
    ?>
  </div>
</div>
<?php
    }
?>