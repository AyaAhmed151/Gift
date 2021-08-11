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
  </div>-->
 <!-- <div class="float-right">
    <a href="<?= url('custome.php')?>" >
      <i class="fas fa-gift"></i> Customize
    </a>
  </div>
</div>-->

<div class="item-page">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
       <!-- <div class="customt">
          <h6>Personal information</h6>
        </div>-->
        <div class="custom mt-2">
        <div class="customt">
          <h5>Personal information</h5>
        </div>
        <br>
          <?php 
            $mail = $_SESSION['email'];
            $da = select('`users`',"`email`='$mail'");
            $newda = $da->fetch(PDO::FETCH_ASSOC);
            $userId = $newda['id'];
            
          ?>
          <h6 class="data">Name: <p class="d-inline-block"><?= $newda['fname'] .' '. $newda['lname']?></p></h6>
          <h6 class="data">Phone: <p class="d-inline-block"><?= $newda['phone']?></p></h6>
          <h6 class="data">Email: <p class="d-inline-block"><?= $newda['email']?></p></h6>
          <h6 class="data">Country: <p class="d-inline-block"><?= $newda['country']?></p></h6>
          <h6 class="data">Password: <p class="d-inline-block"><?= $newda['password']?></p></h6>


          <div class="customt">
          <h5>Oredrs history</h5>
        </div>
        <br>
          <?php 
            $payonline = select('orders',"`user_id`='$userId' AND `state`='1'");
            $paycash = select('orders',"`user_id`='$userId' AND `state` LIMIT 2,7");
            $requestOrder = select('orders',"`user_id`='$userId' AND `state`='3'");
            $acceptPrice = select('orders',"`user_id`='$userId' AND `state`='4'");

          ?>
          <h6 class="">Payonlie orders: <p class="d-inline-block"><?= $payonline->rowCount()?></p></h6>
          <h6 class="">Paycash orders: <p class="d-inline-block"><?= $paycash->rowCount()?></p></h6>
          <h6 class="">Request orders: <p class="d-inline-block"><?= $requestOrder->rowCount()?></p></h6>
          <h6 class="">Accept Price: <p class="d-inline-block"><?= $acceptPrice->rowCount()?></p></h6>
          


          <div class="customt mt-4">
          <h5>Balance</h5>
        </div>
        <br>
        <div >
         <h6 class="">Your balance: <p class="d-inline-block">0 $</p></h6>
        </div>
        

        </div>

        <!--<div class="customt mt-4">
          <h6>Oredrs history</h6>
        </div>-->
       <!-- <div class="custom mt-2">
        <div class="customt">
          <h6>Oredrs history</h6>
        </div>
        <br>
          <?php 
           /*  $payonline = select('orders',"`user_id`='$userId' AND `state`='1'");
            $paycash = select('orders',"`user_id`='$userId' AND `state` LIMIT 2,7");
            $requestOrder = select('orders',"`user_id`='$userId' AND `state`='3'");
            $acceptPrice = select('orders',"`user_id`='$userId' AND `state`='4'");*/

          ?>
          <h6 class="">Payonlie orders: <p class="d-inline-block"><?= $payonline->rowCount()?></p></h6>
          <h6 class="">Paycash orders: <p class="d-inline-block"><?= $paycash->rowCount()?></p></h6>
          <h6 class="">Request orders: <p class="d-inline-block"><?= $requestOrder->rowCount()?></p></h6>
          <h6 class="">Accept Price: <p class="d-inline-block"><?= $acceptPrice->rowCount()?></p></h6>
        </div>-->
       <!-- <div class="customt mt-4">
          <h6>Balance</h6>
        </div>
        <div class="custom mt-2">
         <h6 class="">Your balance: <p class="d-inline-block">0 $</p></h6>
        </div>
      </div>-->
      <br>


     <!-- <div class="col-md-12">
        <div class="customt">
          <h6>Requests</h6>
        </div>-->
        <div class="custom mt-2">
        <div class="col-lg-12">
           <div class="head">
             <h6>Requests</h6>
          </div>
            </div>
          <table class="table table-striped">
            <thead>
              <tr>
              <th scope="col">#</th>
              <th scope="col">Drop off date</th>
              <th scope="col">Drop off location</th>
              <th scope="col">Price</th>
              <th scope="col">Delivery</th>
              
              <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                  if (isset($_GET['cancel'])) {
                    $id = $_GET['cancel'];
                    if(update('orders',"`state`='6'",$id)){
                      echo "<div class='alert alert-success'>order has been canceled</div>";
                      header("Refresh:1; url=profile.php");

                    }
                  }
                  
                  $requestOrderQ = select('orders',"`user_id`='$userId' AND `state`='3' OR `state`='4'");
                  $i=0;
                  if ($requestOrderQ->rowCount() < 1) {
                    echo "<div class='alert alert-danger'>No pending order </div>";
                  } else {
                  while ($a = $requestOrderQ->fetch(PDO::FETCH_ASSOC)) {
                    
                    //delivery data
                    if ($a['delivery'] == '0') {
                      $name = "<span class='badge badge-pill badge-danger'>not determined</span>";
                    } else {
                      $deliveryid = $a['delivery'];
                      $delivery = select('users',"`id`='$deliveryid'");
                      $deliveryfetch = $delivery->fetch(PDO::FETCH_ASSOC);
                      $name = $deliveryfetch['fname'].' '.$deliveryfetch['lname'];
                    }
                    
                    ?>
              <tr>
                <th scope="row"><?= ++$i?></th>
                <td><?= $a['date_dropoff']?></td>
                <td><?= $a['location_dropoff']?></td>
                
                <td><?= ($a['price']=='NULL'
                          ?"<span class='badge badge-pill badge-danger'>not determined</span>"
                          :$a['price']." $ (<a href='".url('confirmprice.php?accept='.$a['id'])."'>Accept</a>)")
                      ?> </td>
                <td><?= $name?></td>
                <td class="text-center">
                  <a onClick="javascript: return confirm('Are you sure?');" href="<?= url('profile.php?cancel='.$a['id'])?>" class="text-danger" data-toggle="tooltip" data-placement="bottom" title="Cancel"><i class="far fa-trash-alt"></i></a>
                </td>
              </tr>
              <?php }
              }?>
            </tbody>
          </table>
        </div>
          <!-- Order type -->
      
        
       <!-- <div class="customt mt-4">
          <h6>Order traffic</h6>
        </div>-->
        <div class="custom mt-2">
        <div class="col-lg-12">
         <div class="head">
          <h6>Order traffic</h6>
           </div>
            </div>
        <table class="table table-striped">
            <thead>
              <tr>
              <th scope="col">#</th>
              <th scope="col">Drop off date</th>
              <th scope="col">Drop off location</th>
              <th scope="col">Price</th>
              <th scope="col">Delivery</th>
              
              <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                <?php 
                  if (isset($_GET['cancelo'])) {
                    $id = $_GET['cancelo'];
                    if(update('orders',"`state`='6'",$id)){
                      echo "<div class='alert alert-success'>order has been canceled</div>";
                      header("Refresh:1; url=profile.php");

                    }
                  }
                  $NewSec = select('orders',"`user_id`='$userId'");
                  $i=0;
                  if ($NewSec->rowCount() < 1) {
                    echo "<div class='alert alert-danger'>No pending order </div>";
                  } else {
                  while ($a = $NewSec->fetch(PDO::FETCH_ASSOC)) {
                    if ($a['state'] == '1' || $a['state'] == '7') {
                      $type = '<span class="badge badge-pill badge-info">Pay online</span>';
                    } elseif ($a['state'] == '2' ) {
                      $type = "<span class='badge badge-pill badge-success'>Pay cash</span>";
                    } elseif ($a['state'] == '3') {
                      $type = "<span class='badge badge-pill badge-primary'>Custme gift</span>";
                    } elseif($a['state'] == '4'){
                      $type = "<span class='badge badge-pill badge-warning'>Waiting accept</span>";
                    } elseif($a['state']== '5'){
                      $type = "<span class='badge badge-pill badge-secondary'>Accept price</span>";
                    } elseif($a['state']== '6'){
                      $type = "<span class='badge badge-pill badge-danger'>Canceled</span>";
                    } 
                    //delivery data
                    if ($a['delivery'] == '0') {
                      $name = "<span class='badge badge-pill badge-danger'>not determined</span>";
                    } else {
                      $deliveryid = $a['delivery'];
                      $delivery = select('users',"`id`='$deliveryid'");
                      $deliveryfetch = $delivery->fetch(PDO::FETCH_ASSOC);
                      $name = $deliveryfetch['fname'].' '.$deliveryfetch['lname'];
                    }
                    
                    ?>
              <tr>
                <th scope="row"><?= ++$i?></th>
                <td><?= $a['date_dropoff']?></td>
                <td><?= $a['location_dropoff']?></td>
                
                <td><?= $type?></td>
                <td><?= $name?></td>
                <?php if($a['state'] != '6'){?>
                <td class="text-center">
                  
                  <a onClick="javascript: return confirm('Are you sure?');" href="<?= url('profile.php?cancelo='.$a['id'])?>" class="text-danger" data-toggle="tooltip" data-placement="bottom" title="Cancel"><i class="far fa-trash-alt"></i></a>
                </td>
                <?php } else {echo "<td></td>";}?>

                
              </tr>
              <?php }
              }?>
            </tbody>
          </table>
        </div>


      </div>
    </div>
  </div>
</div>

<?php 
  include 'footer.php';
?>

