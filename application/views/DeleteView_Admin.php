<html>
    <head>
        <title>This is the Delete page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <center>

            <h1>DELETE</h1>
                <?php
                    //open the function "delete" in controller using post method
                    $this->load->helper("form");
                    $this->load->helper("url");
                    echo form_open("Controller_Admin/delete", array("method"=>"post"));
                ?>
                
                <!--view the form to get the information-->
                <form>
                    <div class="form-group row">
                        <label for="inputEmail3" class="col-sm-2 col-form-label">Package_Id</label>
                        <div class="col-sm-8">
                        <input name="Package_Id" type="text" class="form-control" id="inputEmail3" placeholder="Package_Id">
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary">Delete</button>
                        </div>
                    </div>
                </form>

                <?php
                    //close the form
                    echo form_close();
                ?> 

                <div>
                    <!--print the go back menu-->
                    <?php echo "<br><br>"?>
                    <a href="<?php echo base_url()?>index.php/Controller_Admin" class="list-group-item list-group-item-action">  
                        <h5>Back To Home </h5> </a>
                    <a href="<?php echo base_url()?>index.php/Controller_Admin/viewInputFunction" class="list-group-item list-group-item-action"> 
                        <h5>Back To  Insert </h5> </a>
                    <a href="<?php echo base_url()?>index.php/Controller_Admin/viewRowFunction" class="list-group-item list-group-item-action"> 
                        <h5>Back To  Print The Row </h5> </a>
                    <a href="<?php echo base_url()?>index.php/Controller_Admin/viewTableFunction" class="list-group-item list-group-item-action"> 
                        <h5>Back To  View </h5> </a>
                    <a href="<?php echo base_url()?>index.php/Controller_Admin/viewUpdateFunction" class="list-group-item list-group-item-action"> 
                        <h5>Back To  Update </h5> </a>
                    
                </div>
        </center>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </body>
</html>
