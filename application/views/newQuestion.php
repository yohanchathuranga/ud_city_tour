<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!-- <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <title><?php //echo $title; ?></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="<?php //echo base_url(); ?>index.php/main/enter">UD City</a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="nav navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="<?php //echo base_url(); ?>index.php/main/gquest">Genereal Questions</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="<?php //echo base_url(); ?>index.php/main/newQuest">New Questions</a>
        </li>
      </ul>

    </div>
      <!-- <a class="nav-link" href="#">Hi <?php //echo $userName; ?></a> -->

    <!-- <ul class="nav navbar-nav navbar-right">
      <li class="nav-item"><a class="btn btn-outline-success  nav-link" href="<?php //echo base_url(); ?>main/logout">Logout</a></li>
    </ul>
  </nav> -->

  <div class="container">
    <br><br><br><br><br>

    <div class="table-responsive">
      <table class="table">
      <thead class="thead-dark">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Question</th>
          <th style="text-align: center">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($result as $row) { ?>
        <tr>

          <td><?php echo $row->no; ?></td>
          <td><?php echo $row->name; ?></td>
          <td><?php echo $row->email; ?></td>
          <td><?php echo $row->question; ?></td>

          <td style="text-align: center">
            <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/main/newEdit/<?php echo $row->no ?>">Answer </a>


            <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/main/newDelete/<?php echo $row->no ?>"> Delete </a>
          </td>

        </tr>
      <?php } ?>

      </tbody>
      </table>
    </div>

  </div>


  </body>
</html>
