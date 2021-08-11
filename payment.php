<?php 
  include 'header.php';
  include "navbar.php";
  
  $cat = $_GET['cat'];
  $itemu = $_GET['item'];
  /*$extrau = $_GET['flo'];
  $extracho = $_GET['cho'];*/

  $itemnamevar = select('gifts',"`id`='$itemu'");
  $item = $itemnamevar->fetch(PDO::FETCH_ASSOC);

  if (empty($extrau)) {
    $extra = 0;
  } else {
    $flo = select('gifts',"`id`='$extrau'");
    $extra = $flo->fetch(PDO::FETCH_ASSOC)['price'];
  }
  if (empty($extracho)) {
    $extrachou = 0;
  } else {
    $cho = select('gifts',"`id`='$extracho'");
    $extrachou = $cho->fetch(PDO::FETCH_ASSOC)['price'];
  }
  $total = $item['price'] + $extrachou + $extra;
  $fname='';
  $lname='';
  $phone='';
  $userId = '0';
  if (isset($_SESSION['email'])) {
    
    $mail = $_SESSION['email'];
    $da = select('`users`',"`email`='$mail'");
    $newda = $da->fetch(PDO::FETCH_ASSOC);
    $userId = $newda['id'];
    $fname = $newda['fname'];
    $lname = $newda['lname'];
    $phone = $newda['phone'];
  } 
?>
<br>
<br>
<br>

<div class="item-page-payment">
  <br>
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-12">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Please Fill your data in Detail</h4>
            <form action="confirm.php" class="form-group mt-5 payment-form" method="GET">
              <div class="row">
                <div class="col-md-6">
                  <input type="hidden" name="item" value="<?= $itemu?>" required>
                  <input type="hidden" name="price" value="<?= $total?>" required>
                  <input type="hidden" name="user_id" value="<?= $userId?>" required>
                  <input type="hidden" name="stauts" value="1" required>
                  <label for="">First name</label>
                  <input type="text" name="firstname" placeholder="firstname" required class="form-control" value="<?= $fname?>">
                </div>
                <div class="col-md-6">
                  <label for="">Last name</label>
                  <input type="text" name="lastname" placeholder="lastname" required class="form-control" value="<?= $lname?>">
                </div>
              </div>
              <label for="">Phone</label>
              <input type="text" name="phone" placeholder="Phone" value="<?= $phone?>" required class="form-control">
              <label for="">Name on card</label>
              <input type="text" name="name" placeholder="Name on card" required class="form-control">
              <label for="">Card number</label>
              <input type="number" name="card" placeholder="Card number" required class="form-control">
              <div class="row">
                <div class="col-md-8">
                  <label for="">Expire date</label>
                  <input type="date" name="expiredate" required class="form-control">
                </div>
                <div class="col-md-4">
                  <label for="">CVS</label>
                  <input type="number" name="cvs" placeholder="CVS" required class="form-control">
                </div>
              </div>
              <button type="submit" class=" btn btn-block">Complete payment</button>
            </form>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-12">
        <div class="card">
         
          <div class="card-body">
            <h5 class="card-title">Order summary</h5>
            <div class="dropdown-divider"></div>
            <div class="card-text row">
              <div class="col-6"><?= $item['name']?></div>
              <div class="col-6 text-right"><?= $item['price']?>$</div>
            </div>
            <div class="dropdown-divider"></div>
            <div class="row">
              <div class="col-6"><b>Subtotal:</b></div>
              <div class="col-6 text-right"><?= $item['price']?>$</div>
            </div>
            <div class="my-3"></div>
            <div class="row">
              <div class="col-6 text-right"><?= $extrachou?>$</div>
              <div class="col-6 text-right"><?= $extra?>$</div>
            </div>
            <div class="dropdown-divider"></div>
            <div class="row">
              <div class="col-6"><b>Total:</b></div>
              <div class="col-6 text-right"><?= $total?>$</div>
            </div>
            <?php 
              if (isset($_SESSION['login'])) {
              
            ?>
            <p class="card-text">
            

              <a href="<?= url('confirm.php?phone='.$phone.'&firstname='.$fname.'&lastname='.$lname.'&stauts='.'2'.'&item='.$itemu.'&choc='.$extracho.'&flo='.$extrau.'&price='.$total.'&user_id='.$userId)?>" class="btn btn-block btn-primary">
                Pay cash
              </a>
            </p>
            <?php 
            } else {
              echo "<div class='my-3'></div>";
            }
            
            ?>
          </div>
        </div>
        <div class="card mt-4">
          <div class="card-header">
            User balance
          </div>
          <div class="card-body">
            <h5 class="card-title">Balance</h5>
            <div class="dropdown-divider"></div>
            <div class="card-text row">
              <div class="col-6">your balance</div>
              <div class="col-6 text-right">0 $</div>
            </div>
            <div class="dropdown-divider"></div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <br><br>
</div>




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
  include 'footer.php';
?>