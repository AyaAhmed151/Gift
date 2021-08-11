<?php
  include 'header.php';
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
      <h3>Gifts</h3>
      <p>complete the following form to register</p>
      <?php 
        $errors = [];
        if (isset($_POST['regist'])) {
          $firstname = $_POST['firstname'];
         $lastname = $_POST['lastname'];
         $phone = $_POST['phone'];
         $email = $_POST['email'];
         $password = $_POST['password'];
          $country = $_POST['country'];
          if (empty($firstname)) {
            array_push($errors,"First name is required");
          }
          if (empty($lastname)) {
            array_push($errors,"Last name is required");
          }
          if (empty($phone)) {
            array_push($errors,"Phone is required");
          }
          if (empty($email)) {
            array_push($errors,"Email is required");
          }
          if (empty($password)) {
            array_push($errors,"Password is required");
          }
          if (empty($country)) {
            array_push($errors,"Country is required");
          }
          if (count($errors) >=1) {
            foreach ($errors as $error) {
              echo "<div class='alert alert-danger'>$error</div>";
            }
          } else {
            $old = select("`users`","`email`='$email'");
            if ($old->rowCount() < 1) {
              if(insert("`users`","`fname`,`lname`,`phone`,`email`,`password`,`country`,`type`","'$firstname','$lastname','$phone','$email','$password','$country','user'")){
                echo "<div class='alert alert-success'>Done</div>";
                
                $_SESSION['email'] = $email;
                
                $_SESSION['login'] = true;
                header("Refresh:2; url=gifts");

              } 
              
            } else {
              echo "<div class='alert alert-danger'>User is exist</div>";
            }
          }
        }
      ?>
      <div class="row">
        <div class="col-md-6">
          <label for="">First name</label>
          <input type="text" name="firstname" class="form-control" placeholder='First name'>
        </div>
        <div class="col-md-6">
          <label for="">Last name</label>
          <input type="text" name="lastname" class="form-control" placeholder='Last name'>
        </div>
      </div>
      <label for="">Phone</label>
      <input type="number" name="phone" class="form-control" placeholder='Phone'>
      <label for="">Email</label>
      <input type="email" name="email" class="form-control" placeholder='Email'>
      <label for="">Password</label>
      <input type="password" name="password" class="form-control" placeholder='Password'>
      <label for="">Country</label>
      <input type="text" name="country" class="form-control" placeholder='Country'>
      <button type="submit" name="regist" class="btn btn-block btn-primary">Register</button>
      <a href="<?php echo url('Login.php')?>" class="d-block mt-2 text-center">I have account</a>

    </form>
  </div>
</div>

<?php 
  include 'footer.php';
?>