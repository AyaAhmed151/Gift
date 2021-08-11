<?php 

include "header.php";
include "navbar.php";
?>

<div class="home-categ">
  <div class="homepage-content">
    <div class="container gifts">
      <div class="row">
      <?php 
        $new = select("gifts","`type`='cat'");
        while ($item = $new->fetch(PDO::FETCH_ASSOC)) {
          
      ?>
        <div class="col-md-4 col-sm-6 ">
          <a href="items.php?cat=<?= $item['id']?>" class="items"><?= $item['name']?></a>

        </div>
      <?php }?>  
      </div>
    </div>
  </div>
</div>

<?php
  include 'footer.php';
?>