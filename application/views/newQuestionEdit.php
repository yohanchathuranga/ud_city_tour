

    <br><br><br><br><br>

    <div class="container">
      <form method="post" action="<?php echo base_url(); ?>index.php/main/newUpdate/<?php echo $row->no; ?>">

        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" class="form-control" name="name" value="<?php echo $row->name; ?>" aria-describedby="question" readonly>
        </div>

        <div class="form-group">
          <label for="email">Email</label>
          <input type="text" class="form-control" name="email" value="<?php echo $row->email; ?>" aria-describedby="question" readonly>
        </div>

        <div class="form-group">
          <label for="question">Question</label>
          <input type="text" class="form-control" name="question" value="<?php echo $row->question; ?>" aria-describedby="question" readonly>
        </div>

        <div class="form-group">
          <label for="Answer">Answer</label>
          <textarea class="form-control" name="answer" placeholder="Enter Answer" rows="5" required></textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="<?php echo base_url(); ?>index.php/main/newQuest" class="btn btn-danger ">Cancel</a>
      </form>
    </div>



  </body>
</html>
