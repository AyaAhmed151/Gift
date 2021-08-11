<?php 

include "header.php";

 
$id = $_GET['cat'];
$new = select("gifts","`cat_id`='$id'");
?>
<!--<div class="backBtn container">
  <a href="<?= url('gifts.php')?>">
    <i class="fas fa-arrow-left"></i> Back
  </a>
</div>-->

<!---------------------Navbar------------------------->
<div class="wrapper-nav">
    <nav class="navbar fixed-top navbar-expand-lg bor">
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <div class="logo"><a href="<?= url('index.php')?>">Profession</a></div>
        <ul class="links">
          <li><a href="<?= url('index.php')?>">Home</a></li>
          <li><a href="index.php#about-us">About us</a></li>
          <li><a href="index.php#slider">Products</a></li>
          <li>
            <a href="#" class="desktop-link">HandiCraft</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">HandiCraft</label>
            <ul>
              <li><a href="<?= url('custome.php')?>">delivery online</a></li>
              <li><a href="<?= url('gifts.php')?>">categories</a></li>

              
            </ul>
            <li><a href="<?= url('custome.php')?>">Customize</a></li>

          </li>
          <li><a href="index.php#contact-us">Contact Us</a></li>

          <?php 
        if (isset($_SESSION['login'])) {
      ?>
      <li>
        <a href="<?php echo url('profile.php')?>">profile</a>
      </li>
      <li>
        <a href="<?php echo url('logout.php')?>">Logout</a>
      </li>
      <?php 
      } else {
        ?>
      <li>
        <a href="<?php echo url('login.php')?>">Login</a>
      </li>
        <?php
      }
      ?>
        </ul>
      </div>
      <label for="show-search" class="search-icon"><i class="fas fa-search"></i></label>
      <form action="#" class="search-box">
        <input type="text" placeholder="Type Something to Search..." required>
        <button type="submit" class="go-icon"><i class="fas fa-long-arrow-alt-right"></i></button>
      </form>
    </nav>
  </div>
  <br>
  <br>
  <br>





<div class="slider-2">
<div class="container">

  <div class="row">

<?php
  $offers = array(
    '<span style="background: cornflowerblue;">EXCLUSIVE</span>',
    '<br>',
    '<span style="background: #dc3545;">NEW</span>',
    '<br>',
    '<span style="background: yellow;color:#000">BEST SELLER</span>',
    '<br>',
    '<br>',
    '<br>'
  );
  while ($item = $new->fetch(PDO::FETCH_ASSOC)) {

?>

  <div class="col-md-5 mx-auto">
    <div class="box">
    <div class="row">
      <div class="col-6 col-md-8 ">
        <?= $offers[array_rand($offers)]?>
        <h3><?= $item['name']?></h3>
        <p><?= $item['details']?></p>
        <div class="type">
				  <a class="cart1-btn" href="<?= url('payment.php?item='.$item['id'].'&cat='.$id)?>">$ <?= $item['price']?></a>
          <a class="cart-btn" href="<?= url('payment.php?item='.$item['id'].'&cat='.$id)?>"><i class="fas fa-shopping-bag mr-2"></i>ADD TO CART</a>
			  </div>
        
      </div>
      <div class="col-6 col-md-4">
        <img src="<?= url('images/'.$item['image'])?>" width="100%" alt="">
      </div>
    </div>
    </div>
  </div>
<?php
}
?>
  </div>

</div>
</div>
<?php
  include 'footer.php';
?>