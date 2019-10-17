<html>
    <head>
        <title>This is the homw page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <center>

        <!--priview the main menu-->
        <div class="list-group container" >
            <h1>CHOOSE YOUR OPTION</h1>
            <a href="<?php echo base_url()?>index.php/Controller_Admin/viewInputFunction" class="list-group-item list-group-item-action">  
                <h4> Insert </h4> </a>
            <a href="<?php echo base_url()?>index.php/Controller_Admin/viewDeleteFunction" class="list-group-item list-group-item-action"> 
                <h4> Delete </h4> </a>
            <a href="<?php echo base_url()?>index.php/Controller_Admin/viewRowFunction" class="list-group-item list-group-item-action"> 
                <h4> Print The Row </h4> </a>
            <a href="<?php echo base_url()?>index.php/Controller_Admin/viewTableFunction" class="list-group-item list-group-item-action"> 
                <h4> View </h4> </a>
            <a href="<?php echo base_url()?>index.php/Controller_Admin/viewUpdateFunction" class="list-group-item list-group-item-action"> 
                <h4> Update </h4> </a>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </body>
</html>
