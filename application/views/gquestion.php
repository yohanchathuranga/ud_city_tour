<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>



  <div class="container">
    <br><br><br><br><br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Add a Question
    </button>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">New FAQ</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form method="post" action="<?php echo base_url(); ?>index.php/main/addQuestion">

              <div class="form-group">
                <label for="question">Question</label>
                <input type="text" class="form-control" name="question" aria-describedby="question" placeholder="Enter Question" required>
              </div>

              <div class="form-group">
                <label for="Answer">Answer</label>
                <textarea class="form-control" name="answer" placeholder="Enter Answer" rows="5" required></textarea>
              </div>

              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
          </div>

        </div>
      </div>
  </div><br><br>

  <div class="table-responsive">
    <table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">No</th>
        <th scope="col">Question</th>
        <th scope="col">Answer</th>
        <th colspan="2" style="text-align: center">Actions</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($result as $row) { ?>
      <tr>

        <td><?php echo $row->no; ?></td>
        <td><?php echo $row->question; ?></td>
        <td><?php echo $row->answer; ?></td>
        <td>
            <a class="btn btn-primary" href="<?php echo base_url(); ?>index.php/main/generalEdit/<?php echo $row->no ?>">Edit </a>
        </td>
        <td>
          <a class="btn btn-danger" href="<?php echo base_url(); ?>index.php/main/generalDelete/<?php echo $row->no ?>"> Delete </a></td>
        </td>





      </tr>
    <?php } ?>

    </tbody>
    </table>
  </div>


  </div>


  </body>
</html>
