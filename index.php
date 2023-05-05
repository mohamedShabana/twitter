<?php 
  include './include/header.php';
?>
<div class="container mt-3"> 
    <div class="row">
        <div class="col-3">
          <?php 
            include './include/left.php';
          ?>
        </div>
        <div class="col-6">
          <?php 
            include './include/addtwitte.php';
          ?>
           <hr/>
           <?php 
            include './include/oldtwitte.php';
           ?>
        </div>
        <div class="col-3">L</div>
    </div>
</div>
<?php 
include './include/footer.php';
?>