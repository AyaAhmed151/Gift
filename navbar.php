  <div class="wrapper-nav">
    <nav class="navbar fixed-top navbar-expand-lg bor">
      <input type="checkbox" id="show-search">
      <input type="checkbox" id="show-menu">
      <label for="show-menu" class="menu-icon"><i class="fas fa-bars"></i></label>
      <div class="content">
      <img src="images/logo.png" alt="" width="50px">
      <div class="logo"><a href="<?= url('index.php')?>">Profession</a></div>
        <ul class="links">
          <li><a class="scroll_to" href="<?= url('index.php')?>">Home</a></li>
          <li><a class="scroll_to" href="#about-us">About us</a></li>
          <li><a class="scroll_to" href="#slider">Products</a></li>
          <li>
            <a class="scroll_to" href="#" class="desktop-link">HandiCraft</a>
            <input type="checkbox" id="show-features">
            <label for="show-features">Craft Products</label>
            <ul>
              <li><a href="<?= url('custome.php')?>">delivery online</a></li>
              <li><a href="<?= url('gifts.php')?>">categories</a></li>
              
            </ul>
            <li><a href="<?= url('custome.php')?>">Customize</a></li>

          </li>
          <li><a class="scroll_to" href="#contact-us">Contact Us</a></li>

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

  <!--<div class="dummy-text">
    <h2>Responsive Dropdown Menu Bar with Searchbox</h2>
    <h2>using only HTML & CSS - Flexbox</h2>
  </div>-->