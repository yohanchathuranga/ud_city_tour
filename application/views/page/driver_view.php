<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assert/css/modalPopup.css' ?>">
	<script src="<?php echo base_url() . 'assert/js/modalPopup.js'; ?>"></script>
    

    <title>Hello, world!</title>
  </head>
  <body>
  <!-- The Modal -->
  <div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
    <span class="close">&times;</span>
    <p>Some text in the Modal..</p>
</div>

</div>
    <table class="table">
    <thead class="thead-dark">
        <tr>
            
            <th scope="col">Name</th>
            <th scope="col">Telephone</th>
            <th scope="col">Rating</th></th>
            <th scope="col">Profile</th></th>
        </tr>
    </thead>
    <tbody>
        <?php
        foreach ($drivers->result() as $driver) {?>
        <tr>
            
            <td><?=$driver->Name?></td>
            <td><?=$driver->Telephone?></td>
            <td><?=$driver->Rating?>
                <form action="<?=base_url().'index.php/driver_Controller/incrementRating'?>" method="post" id="rating-update-<?=$driver->Driver_ID?>" style="display:none">
                <input type="hidden" name="rating-id" value="<?=$driver->Driver_ID?>">
                </form>
                <button type="button" onclick="document.getElementById('rating-update-<?=$driver->Driver_ID?>').submit()" class="btn btn-sm btn-success">Up Vote</button>
            
            </td>
            <td><button type="button" class="btn btn-success" id="myBtn">View Profile</button></td>
        </tr>
        <?php
        }
        ?>
    </tbody>
    </table>

  </body>
</html>