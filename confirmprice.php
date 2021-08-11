<?php 
  include 'header.php';
  if (!isset($_SESSION['login'])) {

    header("Location: login.php");
  } 

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
<div class="item-page">
  <div class="container">
    <div class="row">
      <div class="col-md-8 offset-md-2">
        <div class="customt">
          <h4>Complete payment</h4>
        </div>
        <div class="custom mt-3">
          <form action="" class="form-group payment-form" method="POST">
            <h6> Complate the form</h6>
            <div class="row">
              <?php 
                if (isset($_POST['payment'])){
                  $idm = $_GET['accept'];
                  $cardname         = (isset($_POST['name'])       ?$_POST['name']      :'NULL');
                  $cardnumber       = (isset($_POST['card'])       ?$_POST['card']      :'NULL');
                  $cardexpire       = (isset($_POST['expiredate']) ?$_POST['expiredate']:'NULL');
                  $cardcvs          = (isset($_POST['cvs'])        ?$_POST['cvs']       :'NULL');
                  $col = "`ncard`='$cardname' , `card_namber`='$cardnumber' , `expire_date`='$cardexpire' , `cvs`='$cardcvs' , `state`='5'";

                  if(update('orders',$col,$idm)){
                    echo "<div class='alert alert-success col-12'>Accept price</div>";
                    header("Refresh:1; url=profile.php");
              
                  }
                }
              ?>  
              <div class="col-md-6">
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
            <button type="submit" name="payment" class="btn-primary btn btn-block">Complete payment</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>