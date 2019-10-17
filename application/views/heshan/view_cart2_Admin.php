<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="card-deck">
  <div class="card">
    <img src="<?php echo base_url();?>images/anu_edited.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Anuradhapura</h5>
      <h6 class="card-subtitle mb-2 text-muted">2 Days Tour</h6>
      <?php
          foreach($result as $re){
            if ($re->Package_Id == 1){
              echo "<br>Package Id  : ".$re->Package_Id. 
              "<br>Package Type  : " .$re->Package_type. 
              "<br>Price  : " .$re->Price. 
              "<br>Day count  : " .$re->Day_count. 
              "<br>Description  : " .$re->Description. 
              "<br>";
            }
          }
            echo "<br>";
            
        ?>
        <a href="#" class="btn btn-primary">See Tour</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
  <img src="<?php echo base_url();?>images/colombo_edited.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Colombo</h5>
      <h6 class="card-subtitle mb-2 text-muted">4 Days Tour</h6>
      <?php
          foreach($result as $re){
            if ($re->Package_Id == 2){
              echo "<br>Package Id  : ".$re->Package_Id. 
              "<br>Package Type  : " .$re->Package_type. 
              "<br>Price  : " .$re->Price. 
              "<br>Day count  : " .$re->Day_count. 
              "<br>Description  : " .$re->Description. 
              "<br>";
            }
          }
            echo "<br>"
        ?>
        <a href="#" class="btn btn-primary">See Tour</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
  <img src="<?php echo base_url();?>images/galle_edited.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Galle</h5>
      <h6 class="card-subtitle mb-2 text-muted">7 Days Tour</h6>
      <?php
          foreach($result as $re){
            if ($re->Package_Id == 3){
              echo "<br>Package Id  : ".$re->Package_Id. 
              "<br>Package Type  : " .$re->Package_type. 
              "<br>Price  : " .$re->Price. 
              "<br>Day count  : " .$re->Day_count. 
              "<br>Description  : " .$re->Description. 
              "<br>";
            }
          }
            echo "<br>"
        ?>
        <a href="#" class="btn btn-primary">See Tour</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

<?php echo "<br><br>"?>

<div class="card-deck">
  <div class="card">
    <img src="<?php echo base_url();?>images/kaluthara_edited.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Kaluthara</h5>
      <h6 class="card-subtitle mb-2 text-muted">4 Days Tour</h6>
      <?php
          foreach($result as $re){
            if ($re->Package_Id == 4){
              echo "<br>Package Id  : ".$re->Package_Id. 
              "<br>Package Type  : " .$re->Package_type. 
              "<br>Price  : " .$re->Price. 
              "<br>Day count  : " .$re->Day_count. 
              "<br>Description  : " .$re->Description. 
              "<br>";
            }
          }
            echo "<br>"
        ?>
        <a href="#" class="btn btn-primary">See Tour</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
  <img src="<?php echo base_url();?>images/kandy_edited.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Kandy</h5>
      <h6 class="card-subtitle mb-2 text-muted">7 Days Tour</h6>
      <?php
          foreach($result as $re){
            if ($re->Package_Id == 5){
              echo "<br>Package Id  : ".$re->Package_Id. 
              "<br>Package Type  : " .$re->Package_type. 
              "<br>Price  : " .$re->Price. 
              "<br>Day count  : " .$re->Day_count. 
              "<br>Description  : " .$re->Description. 
              "<br>";
            }
          }
            echo "<br>"
        ?>
        <a href="#" class="btn btn-primary">See Tour</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
  <img src="<?php echo base_url();?>images/mathara_edited.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Mathara</h5>
      <h6 class="card-subtitle mb-2 text-muted">5 Days Tour</h6>
      <?php
          foreach($result as $re){
            if ($re->Package_Id == 6){
              echo "<br>Package Id  : ".$re->Package_Id. 
              "<br>Package Type  : " .$re->Package_type. 
              "<br>Price  : " .$re->Price. 
              "<br>Day count  : " .$re->Day_count. 
              "<br>Description  : " .$re->Description. 
              "<br>";
            }
          }
            echo "<br>"
        ?>
        <a href="#" class="btn btn-primary">See Tour</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

<?php echo "<br><br>"?>

<div class="card-deck">
  <div class="card">
    <img src="<?php echo base_url();?>images/polonnaruwa_edited.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Polonnaruwa</h5>
      <h6 class="card-subtitle mb-2 text-muted">2 Days Tour</h6>
      <?php
          foreach($result as $re){
            if ($re->Package_Id == 7){
              echo "<br>Package Id  : ".$re->Package_Id. 
              "<br>Package Type  : " .$re->Package_type. 
              "<br>Price  : " .$re->Price. 
              "<br>Day count  : " .$re->Day_count. 
              "<br>Description  : " .$re->Description. 
              "<br>";
            }
          }
            echo "<br>"
        ?>
        <a href="#" class="btn btn-primary">See Tour</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
  <img src="<?php echo base_url();?>images/anu_edited.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Anuradhapura</h5>
      <h6 class="card-subtitle mb-2 text-muted">1 Day Tour</h6>
      <?php
          foreach($result as $re){
            if ($re->Package_Id == 8){
              echo "<br>Package Id  : ".$re->Package_Id. 
              "<br>Package Type  : " .$re->Package_type. 
              "<br>Price  : " .$re->Price. 
              "<br>Day count  : " .$re->Day_count. 
              "<br>Description  : " .$re->Description. 
              "<br>";
            }
          }
            echo "<br>"
        ?>
        <a href="#" class="btn btn-primary">See Tour</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
  <img src="<?php echo base_url();?>images/galle_edited.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Galle</h5>
      <h6 class="card-subtitle mb-2 text-muted">5 Days Tour</h6>
      <?php
          foreach($result as $re){
            if ($re->Package_Id == 9){
              echo "<br>Package Id  : ".$re->Package_Id. 
              "<br>Package Type  : " .$re->Package_type. 
              "<br>Price  : " .$re->Price. 
              "<br>Day count  : " .$re->Day_count. 
              "<br>Description  : " .$re->Description. 
              "<br>";
            }
          }
            echo "<br>"
        ?>
        <a href="#" class="btn btn-primary">See Tour</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>

<?php echo "<br><br>"?>

<div class="card-deck">
  <div class="card">
    <img src="<?php echo base_url();?>images/kandy_edited.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Kandy</h5>
      <h6 class="card-subtitle mb-2 text-muted">4 Days Tour</h6>
      <?php
          foreach($result as $re){
            if ($re->Package_Id == 10){
              echo "<br>Package Id  : ".$re->Package_Id. 
              "<br>Package Type  : " .$re->Package_type. 
              "<br>Price  : " .$re->Price. 
              "<br>Day count  : " .$re->Day_count. 
              "<br>Description  : " .$re->Description. 
              "<br>";
            }
          }
            echo "<br>"
        ?>
        <a href="#" class="btn btn-primary">See Tour</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
  <img src="<?php echo base_url();?>images/polonnaruwa_edited.jpg" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title">Polonnaruwa</h5>
      <h6 class="card-subtitle mb-2 text-muted">6 Days Tour</h6>
      <?php
          foreach($result as $re){
            if ($re->Package_Id == 11){
              echo "<br>Package Id  : ".$re->Package_Id. 
              "<br>Package Type  : " .$re->Package_type. 
              "<br>Price  : " .$re->Price. 
              "<br>Day count  : " .$re->Day_count. 
              "<br>Description  : " .$re->Description. 
              "<br>";
            }
          }
            echo "<br>"
        ?>
        <a href="#" class="btn btn-primary">See Tour</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
  <img src="<?php echo base_url();?>images/kaluthara_edited.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Kaluthara</h5>
      <h6 class="card-subtitle mb-2 text-muted">1 Day Tour</h6>
      <?php
          foreach($result as $re){
            if ($re->Package_Id == 12){
              echo "<br>Package Id  : ".$re->Package_Id. 
              "<br>Package Type  : " .$re->Package_type. 
              "<br>Price  : " .$re->Price. 
              "<br>Day count  : " .$re->Day_count. 
              "<br>Description  : " .$re->Description. 
              "<br>";
            }
          }
            echo "<br>"
        ?>
        <a href="#" class="btn btn-primary">See Tour</a>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>
</html>