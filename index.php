<?php 

include "header.php";
include "navbar.php";
?>

<div class="home-page">
  <div class="homepage-content">
    <div class="container">
      <div class="text-content">
        <h3>HandiCraft</h3>
        <p>
        Are you a fan of handmade? We welcome you to our website,<br>
         which provides you with many categories of handmade You can customize the product in one only click.
         <br> and pay online, also you can customize your HandiCraft<br>
          by selecting from our web application or setting<br>
          the pickup location and sele  cting<br> 
          
        </p>
        <div>
          <div class="row">
          <div class="col-lg-12 col-sm-12">
      <button class="first-btn"><a href="<?= url('gifts.php')?>">categories</a></button>
      </div>
      </div>
    </div>

          </div>
    </div>
  </div>
</div>
<?php
  $new = select('gifts',"`type`='item'");
?>

<div class="about-us" id="about-us">
  <div class="container">
    <div class="row">
    <div class="col-12 text-center mb-3">
        <h3> About Us</h3>
        <p>We offer you high quality of handiCraft Product <i class="far fa-grin-hearts"></i></p> 
      </div>
      <div class="col-md-6">
        <img src="images/about.png"  alt="photo">
      </div>
      <div class="col-md-6 txt-about">
        <p>
        Are you a fan of handmade? We welcome you to our website, which provides you with many categories of handmade You can customize the product in one only click.
          <br>
          <br>
          We have chosen for you a distinguished and superior group with experience in handmade work.
        <h5><i class="fas fa-circle"></i> We have fast delivery</h5> 
        <h5><i class="fas fa-circle"></i> Edit product with one click</h5>
        <h5><i class="fas fa-circle"></i> High quality and material</h5>


          <br>
          <br>
          <br>
          <div class="row mt-4">
            <div class="col-12">
              <h4> Show Our Video to know how we work !</h4>
              <a href="https://www.youtube.com/watch?v=6pzMJ4jiUgE&ab_channel=VENTUNOART"><i class="fab fa-youtube"></i></a>
            </div>
            <div class="col-6"></div>
          </div>
        </p>
      </div>
    </div>
  </div>
</div>


<br>
<br>


<!-----------------Slider---------------------------->
<section class="slider" id="slider">
<!-------------------responsive-------------------------->

<div class="container">
  <div class="row">
  <div class="col-12 text-center mb-3">
          <h3> Our products</h3>
          <p>You can see our product and select one of them to make a new order</p>
        </div>
        <?php 
       $i=0;
          while ($item = $new->fetch(PDO::FETCH_ASSOC)){
        ?>
    <div class="col-lg-4 col-sm-5">
	<!--2------------------------------------>	
  
  <li class="item-b">
<!--box-slider--------------->
	<div class="box">
	<!--img-box---------->
	<div class="slide-img">
	<img alt="2" src="<?= url('images/'.$item['image'])?>">
	<!--overlayer---------->
	<div class="overlay">
	<!--buy-btn------>	
  <a class="cart-btn" href="<?= url('payment.php?item='.$item['id'].'&cat='.$item['cat_id'])?>"><i class="fas fa-shopping-bag mr-2"></i>ADD TO CART</a>	
	</div>
	</div>
	<!--detail-box--------->
	<div class="detail-box">
	<!--type-------->
	<div class="type">
    <h3><?= $item['name']?> <a href="<?= url('payment.php?item='.$item['id'].'&cat='.$item['cat_id'])?>">$ <?= $item['price']?></a>
</h3>
    
    <p><?= $item['details']?></p>
    <!--price-------->
  
	</div>
	</div>
	
	
	</div>		
</li>

</ul>
    </div>
    <?php
            if ($i > 7){
              break;
            } else {
              
              ++$i;
            } 
          }
          ?>

    

  </div>
</div>
	</section>
	

<div class="contact-us" id="contact-us">
  <div class="container">
    <div class="row">
    <div class="col-12 text-center mb-3">
        <h3> CONTACT US</h3>
        <p> contact us any time by these ways</p>
      </div>
      <div class="col-md-6">
        <img src="images/butterfly.png" width="100%" alt="photo">
      </div>
      <div class="col-md-6">
        <p>
        Are you a fan of handmade? We welcome you to our website, which provides you with many categories of handmade You can customize the product in one only click.
          <br>
          <br>
          We are a group of students, we decided to do a small project that provides a small store to help people 
          who want to buy handmade.
          <br>
          <br>
          <br>
          <div class="row">
            <div class="col-12">
              <!--<i class="fas fa-map-marker-alt"></i> Giza Egypt
            </div>
            <div class="col-6">
              <i class="fas fa-phone-alt"></i> +20 102 0767 940
            </div>
          </div>-->
          <div class="input-group mb-3">
  <span class="input-group-text" id="basic-addon1">@</span>
  <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
  <input type="text" class="form-control" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
</div>


<div class="input-group">
  <span class="input-group-text">Text here..</span>
  <textarea class="form-control" aria-label="With textarea"></textarea>
</div>


          <div class="row mt-4">
            <div class="col-6">
              <i class="far fa-envelope"></i> HandiCraft2021@Gmail.com
            </div>
          </div>
        </p>
      </div>
    </div>
  </div>
</div>
</div>
</div>


<!--<div class="about-us text-center" id="about-us">
  <div class="overlly">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img src="images/pexels-giftpunditscom-1303080.jpg" width="100px" class="rounded-circle" alt="">
          </div>
          <div class="col-md-12 text-center">
            <h3>About Guns for hire</h3>
            <p class="">guns for hire application provides the comfort and ease for any person want to buy a gift 
            for someone, because it is for only one click you can buy gifts, flowers, chocolates, 
            and send gift cards anywhere, anytime, and pay online, also you can customize your 
            gift by selecting from our web application or setting the pickup location and selecting 
            drop-off location and packaging details.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>-->

<!--<footer>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center social">
        <i class="fab fa-facebook-f"></i>
        <i class="fab fa-instagram"></i>
        <i class="fab fa-twitter"></i>
        <i class="fab fa-youtube"></i>
      </div>
      
    </div>
  </div>
</footer>--->

<!--<div class="content1">
      <div class="text">Fully Responsive Footer Section</div>
      <div class="p">HTML and CSS (Flexbox)</div>
    </div>-->


<br>
<br>

    <footer>
      <div class="main-content">
        <div class="left box">
          <h2>About us</h2>
          <div class="content">
            <p>Are you a fan of handmade? We welcome you to our website, which provides you with many categories of handmade You can customize the product in one only click.
           </p>
            <div class="social">
              <a href="https://facebook.com/coding.np"><span class="fab fa-facebook-f"></span></a>
              <a href="#"><span class="fab fa-twitter"></span></a>
              <a href="https://instagram.com/coding.np"><span class="fab fa-instagram"></span></a>
              <a href="https://youtube.com/c/codingnepal"><span class="fab fa-youtube"></span></a>
            </div>
          </div>
        </div>

        <div class="center box">
          <h2>Address</h2>
          <div class="content">
            <div class="place">
              <span class="fas fa-map-marker-alt"></span>
              <span class="text">Birendranagar, Surkhet</span>
            </div>
            <div class="phone">
              <span class="fas fa-phone-alt"></span>
              <span class="text">+089-765432100</span>
            </div>
            <div class="email">
              <span class="fas fa-envelope"></span>
              <span class="text">HandiCraft@Gmail.com</span>
            </div>
          </div>
        </div>

        <div class="right box">
          <h2>Contact us</h2>
          <div class="content">
            <form action="#">
              <div class="email">
                <div class="text">Email *</div>
                <input type="email" required>
              </div>
              <div class="msg">
                <div class="text">Message *</div>
                <!-- <changeit rows="2" cols="25" required></changeit> -->
              </div>
              <div class="btn">
                <button type="submit">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="bottom">
        <center>
          <span class="credit">Created By <a href="https://www.codingnepalweb.com">HandiCraft</a> | </span>
          <span class="far fa-copyright"></span><span> 2020 All rights reserved.</span>
        </center>
      </div>
    </footer>

<?php
include "footer.php";

?>