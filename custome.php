<?php 
  include 'header.php';
  if (!isset($_SESSION['login'])) {
    header("Location: login.php");
  }
?>


<!---------------------Navbar------------------------->
<div class="wrapper-nav">
    <nav class="navbar fixed-top navbar-expand-lg bor">
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <img src="images/logo.png" alt="" width="50px">
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
  






<!--<div class="backBtn container">
  <div class="float-left">
    <a href="<?= url('index.php')?>" >
      <i class="fas fa-arrow-left"></i> Back
    </a>
  </div>
</div>-->
<?php 
  $mail = $_SESSION['email'];
  $da = select('`users`',"`email`='$mail'");
  $newda = $da->fetch(PDO::FETCH_ASSOC);
  $userId = $newda['id'];
?>

<div class="item-page">
  <div class="container">
    <div class="row">
      <div class="offset-md-3 col-md-6 col-lg-6">
        <div class="customize">
          <form action="confirm.php" class="formCust form-group" method="GET">
            <h3>Complete the form</h3>
            <p class="mb-3">Complete the following form to send us your order</p>
            <div class="alert alert-danger stat"></div>
            <input type="hidden" class="form-control" name="user_id" value="<?= $userId?>">
            <input type="hidden" class="form-control" name="stauts" value="3">
            <div class="row">
              <div class="col-md-6">
                <label for="">First name</label>
                <input type="text" class="form-control" name="firstname" value="<?= $newda['fname']?>" placeholder="First name" required>
              </div>
              <div class="col-md-6">
                <label for="">Last name</label>
                <input type="text" class="form-control" name="lastname" value="<?= $newda['lname']?>" placeholder="Last name" required>
              </div>
            </div>
            <label for="">Phone</label>
            <input type="text" class="form-control" name="phone" value="<?= $newda['phone']?>" placeholder="Phone" required>
            <div class="row">
              <div class="col-md-6">
                <label for="">Pickup date</label>
                <input type="date" class="date form-control" name="pickdate" required>
              </div>
              <div class="col-md-6">
                <label for="">Time</label>
                <input type="time" class="form-control" name="time" required>
              </div>
            </div>
            <label for="">Pickup location</label>
            <input type="text" class="form-control" name="address" placeholder="Address" required>
            <label for="">More details</label>
            <textarea name="details" class="form-control" cols="30" rows="10" placeholder="All details"></textarea>
            <button class="mt-3 btn btn-block  btnSend" type="submit">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php 
  include 'footer.php';
?>

