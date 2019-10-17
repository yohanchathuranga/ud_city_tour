<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <br><br><br><br>


    <div class="container">
      <div class="container" style="background-color: orange;border-radius:30px;">
        <h3 class="text-center" style="color: #008000">How can we help you?</h3>
        <input class="form-control" id="myInput" type="text" placeholder="Find help! Enter search term here">
        <br>
      </div>
      <br>

      <h3>Frequently Asked Questions</h3>

      <h4><small>General</small></h4>


      <table class="table table-hover">
        <?php foreach($result as $row) { ?>

        <tbody id="myTable">
          <tr>
            <th>
               <div class="text-primary">
                 <?php echo $row->question; ?>
               </div>
               <div class="text-muted">
                 <?php echo $row->answer; ?>
               </div>

            </th>
          </tr>
        </tbody>
      <?php } ?>
      </table>
      <br><br>


      <div style="background-color: orange; width:1100px; padding:50px 0px; border-radius:30px;">
        <div class="text-center display-4">
          Get in Touch
        </div>
        <br>
        <div class="text-center display-5">
          Do you have any questions? Need to get in touch? Drop us a note below and we will get right back to you!
        </div>
        <br>

        <form method="post" action="<?php echo base_url(); ?>index.php/FaqController/addQuestion">
        <div class="form-group row">
          <label for="name" class="col-sm-2 col-form-label" style="text-align:center;">Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control" name="name" placeholder="Enter your name" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="email" class="col-sm-2 col-form-label" style="text-align:center;">Email</label>
          <div class="col-sm-9">
            <input type="email" class="form-control" name="email" placeholder="Enter your Email" required>
          </div>
        </div>

        <div class="form-group row">
          <label for="message" class="col-sm-2 col-form-label" style="text-align:center;">Message</label>
          <div class="col-sm-9">
            <textarea rows="5" class="form-control" name="message" placeholder="Your Message Here" required></textarea>
          </div>
        </div>


        <div class="form-group row" align="right">
          <div class="col d-flex justify-content-end mr-5">
            <button type="submit" class="btn btn-primary px-5 mr-5" >Ask</button>
          </div>
        </div>
      </form>
      </div>




    </div>

<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});


</script>

  <!-- </body>
</html> -->
