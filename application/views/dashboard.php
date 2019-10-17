<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title><?php echo $title; ?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand active" href="<?php echo base_url(); ?>index.php/main/enter">UD City</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>index.php/main/gquest">Genereal Questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url(); ?>index.php/main/newQuest">New Questions</a>
        </li>
      </ul>

    </div>
      
      <!-- <a class="nav-link" href="#">Hi <?php //echo $userName; ?></a> -->

    <ul class="nav navbar-nav navbar-right">
      <li class="nav-item"><a class="btn btn-outline-success  nav-link" href="<?php echo base_url(); ?>main/logout">Logout</a></li>
    </ul>
  </nav>
  <br><br><br><br>

  <div class="container">
  <h2>Overview</h2>
  <button type="button" class="btn btn-primary">
    General Questions <span class="badge badge-light"><?php echo $generalResult; ?></span>
  </button>
  <button type="button" class="btn btn-danger">
    Unanswerd Questions <span class="badge badge-light"><?php echo $newResult; ?></span>
  </button>
  </div>


  </body>
</html>
