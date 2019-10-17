<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel = "stylesheet" type = "text/css"
   href = "<?php echo base_url(); ?>css/style.css">

    <title><?php echo $title; ?></title>
  </head>
  <body>




    <div class="login">
      <h2>Admin Login</h2>
      <form action="<?php echo base_url(); ?>main/login_validation" method="post">


          <input type="text" name="uname" placeholder="Enter Username" value="<?php echo set_value('uname') ?>" required>
          <span class="text-danger"><?php echo form_error('uname'); ?></span>



          <input type="password" name="password" placeholder="Enter Password" required>
          <span class="text-danger"><?php echo form_error('password'); ?></span>


          <input type="submit" name="insert" value="Login">
          <?php
          echo '<label class="text-danger">'.$this->session->flashdata("error");
           ?>

      </form>
</div>






  </body>
</html>
