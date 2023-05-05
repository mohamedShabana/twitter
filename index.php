<?php 
  include './include/header.php';
?>
<div class="container"> 
    <div class="row">
        <div class="col-3">
          <?php 
            include './include/left.php';
          ?>
        </div>
        <div class="col-6">
            <form action="twitte.php" method="POST" class="">
                <textarea name="artic" class="form-control mb-2">
                </textarea>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-3">L</div>
    </div>
</div>
<?php 
include './include/footer.php';
?>