<?php
  
  include 'header.php';
  if (isset($_SESSION['login'])) {
    header("Refresh:2; url=gifts.php");
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



<div class="login-form-home">
  <div class="login-form">
    <form action="" class="form-group" method="POST">
      <h3>login</h3>
      <p>Fill the data with right details. </p>
      <?php 

      if (isset($_POST['login'])) {
        $email = $_POST['email'];
        $pass = $_POST['password'];
        if (empty($email) || empty($pass)) {
          echo "<div class='alert alert-danger'>email or password is wrong</div>";
        } else {
          $old = select("`users`","`email`='$email' AND `password`='$pass' AND `type`='user'");
          if ($old->rowCount() < 1) {
            echo "<div class='alert alert-danger'>email or password is wrong</div>";
          } else {
            $data = $old->fetch(PDO::FETCH_ASSOC);
            
            $_SESSION['email'] = $data['email'];
            $_SESSION['login'] = true;
            echo "<div class='alert alert-success'>Login successfully</div>";
            header("Refresh:2; url=profile.php");
          }
        }
      }

      ?>
      <label for="">Email</label>
      <input type="email" name="email" class="form-control" placeholder='Email'>
      <label for="" class="mt-3">Password</label>
      <input type="password" name="password" class="form-control" placeholder='Password'>
      
      <button type="submit" name="login" class="btn btn-block btn-primary">Login</button>
      <a href="<?php echo url('register.php')?>" class="d-block mt-2 text-center">Create account</a>

    </form>
  </div>
</div>