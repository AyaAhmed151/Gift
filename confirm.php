<?php 
  include 'header.php';
  include "navbar.php";
  
?>

<?php 
  
        
  if (isset($_POST['confirm'])) {
    $user_id          = $_GET['user_id'];
    $firstname        = $_GET['firstname'];
    $lastname         = $_GET['lastname'];
    $status           = $_GET['stauts'];
    $phone            = $_GET['phone'];
    $cardname         = (isset($_GET['name'])       ?$_GET['name']      :'NULL');
    $cardnumber       = (isset($_GET['card'])       ?$_GET['card']      :'NULL');
    $cardexpire       = (isset($_GET['expiredate']) ?$_GET['expiredate']:'NULL');
    $cardcvs          = (isset($_GET['cvs'])        ?$_GET['cvs']       :'NULL');
    $pickdate         = (isset($_GET['pickdate'])   ?$_GET['pickdate']  :'NULL');
    $picktime         = (isset($_GET['time'])       ?$_GET['time']      :'NULL');
    $pickup_location  = (isset($_GET['address'])    ?$_GET['address']   :'NULL');
    $price            = (isset($_GET['price'])      ?$_GET['price']     :'NULL');
    $item             = (isset($_GET['item'])       ?$_GET['item']      :'NULL');
    $flo              = (isset($_GET['flo'])        ?$_GET['flo']       :'NULL');
    $choc             = (isset($_GET['choc'])       ?$_GET['choc']      :'NULL');
    $details          = (isset($_GET['details'])    ?$_GET['details']   :'NULL');
    $dropdate         = $_POST['dropdate'];
    $droptime         = $_POST['droptime']; 
    $droplocation     = $_POST['droplocation'];
    $message          = $_POST['message'];

    $col = "`user_id`,`fname`,`lname`,`phone`,`ncard`,`card_namber`,`expire_date`,`cvs`,`date_pick`,`date_dropoff`,`dropoff_time`,`pickup_time`,`location`,`location_dropoff`,`price`,`item`,`flower`,`choc`,`msg`,`details`,`delivery`,`state`";
    $data = "'$user_id','$firstname','$lastname','$phone','$cardname','$cardnumber','$cardexpire','$cardcvs','$pickdate','$dropdate','$droptime','$picktime','$pickup_location','$droplocation','$price','$item','$flo','$choc','$message','$details','0','$status'";
    if (insert('orders',$col,$data)) {
      $sta = "<div class='alert alert-success'>Done</div>";
      header('Refresh: 2; url=index.php');
    }
    
  }

?>
<br>
<br>
<br>

<section id="confirm">
<div class="item-page-payment">
  <div class="container">
    <div class="row">
      <div class="col-md-8 col-lg-12">
        <div class="custom">
          <form action="" class="formCust form-group" method="POST">
            <h3>Complete the form</h3>
            <p class="mb-3">Please Fill the form to send us your order</p>
            <?php 
              if (isset($sta)) {
                echo $sta;
              }
            ?>
            <div class="row">
              <div class="col-md-6">
                <label for="">Drop off date</label>
                <input type="date" class="date form-control" name="dropdate" required>
              </div>
              <div class="col-md-6">
                <label for="">Drop off Time</label>
                <input type="time" class="form-control" name="droptime" required>
              </div>
            </div>
            <label for="">Drop of location</label>
            <input type="text" class="form-control" name="droplocation" placeholder="location" required>

            <button class="mt-3 btn btn-block btn-success" name="confirm" type="submit">Confirm</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
<br><br>
</section>
<?php 
  include 'footer.php';
?>

