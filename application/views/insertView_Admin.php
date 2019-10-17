<html>
    <head>
        <title>This is the insertView page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <center>

            <h1>INSERT</h1>
                <?php
                    //open the function "insert" in controller using post method
                    $this->load->helper("form");
                    $this->load->helper("url");
                    echo form_open("Controller_Admin/insert", array("method"=>"post")); 
                ?>

                <!--view the form to get the information-->
                <form>
                <div class="form-group row">
                    <label for="packageId" class="col-sm-2 col-form-label">Package_Id</label>
                    <div class="col-sm-8">
                    <input name="Package_Id" type="text" class="form-control" id="inputEmail3" placeholder="Package_Id">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="packagetype" class="col-sm-2 col-form-label">Package_type</label>
                    <div class="col-sm-8">
                    <input name="Package_Type" type="text" class="form-control" id="inputPassword3" placeholder="Package_type">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="price" class="col-sm-2 col-form-label">Price</label>
                    <div class="col-sm-8">
                    <input name="Price" type="text" class="form-control" id="inputPassword3" placeholder="Price">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="daycount" class="col-sm-2 col-form-label">Daycount</label>
                    <div class="col-sm-8">
                    <input name="Day_count" type="text" class="form-control" id="inputPassword3" placeholder="Daycount">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="desruption" class="col-sm-2 col-form-label">Description</label>
                    <div class="col-sm-8">
                    <input name="Description" type="text" class="form-control" id="inputEmail3" placeholder="Description">
                    </div>
                </div>
                
                <div class="form-group row">
                    <div class="col-sm-12">
                    <button type="submit" class="btn btn-primary">Insert</button>
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
                    <a href="<?php echo base_url()?>index.php/Controller_Admin/viewDeleteFunction" class="list-group-item list-group-item-action"> 
                        <h5>Back To  Delete </h5> </a>
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
