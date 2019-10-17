

    <br><br><br><br><br>

    <div class="container">
      <form method="post" action="<?php echo base_url(); ?>index.php/main/update/<?php echo $row->no; ?>">

        <div class="form-group">
          <label for="question">Question</label>
          <input type="text" class="form-control" name="question" value="<?php echo $row->question; ?>" aria-describedby="question" placeholder="Enter Question" required>
        </div>

        <div class="form-group">
          <label for="Answer">Answer</label>
          <textarea class="form-control" name="answer" placeholder="Enter Answer" rows="5" required><?php echo $row->answer; ?></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Confirm</button>
        <a href="<?php echo base_url(); ?>index.php/main/gquest" class="btn btn-danger ">Cancel</a>
      </form>
    </div>



  </body>
</html>
