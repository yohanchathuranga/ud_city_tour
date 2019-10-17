<html>
    <head>
        <title>This is the insertView page</title>
            <style>     
                table {             
                    border-collapse: collapse;
                    width: 100%;
                }

                th, td {
                    text-align: left;
                    padding: 8px;
                }

                tr:nth-child(even){
                    background-color: #f2f2f2
                }

                th {
                    background-color: black;
                    color: white;
                }
            </style>

            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    </head>
    <body>
        <center>
            <h1>Notifications</h1>
        </center>
        <table>
            
        <?php
            foreach($result as $re){

                if ($re->Operation == "Update"){
                    echo "<tr><td> Update       : 'Package_Id' : ".$re->Extra.  
                    " is Updated !  new 'Package_Id is' : " .$re->Package_Id.
                    " , new 'Package_Type' is : " .$re->Package_type. 
                    " the new 'Price' is : " .$re->Price. 
                    ", the new 'Day_Count' is : " .$re->Daycount. 
                    " and the new 'Description' is : " .$re->Description.
                    "! </td></tr>";
                }else if ($re->Operation == "Insert"){
                    echo "<tr><td> Insert       : 'Package_Id' : ".$re->Package_Id.  
                    " is Inserted ! 'Package_Type' is : " .$re->Package_type. 
                    " , the 'Price' is : " .$re->Price. 
                    ", the 'Day_Count' is : " .$re->Daycount. 
                    " and the 'Description' is : " .$re->Description.
                    "! </td></tr>";
                }else if ($re->Operation == "Delete"){
                    echo "<tr><td> Delete       :  'Package_Id' : ".$re->Package_Id.
                    ", is removed by the Administrator ! 
                    </td></tr>";
                }
                
            }
            echo "</table><br>.<br>";
        ?>

        <center>
            <div>
                <!--print the go back menu-->
                <?php echo "<br><br>"?>
                <a href="<?php echo base_url()?>index.php/Controller" class="list-group-item list-group-item-action">  
                    <h5>Back To Home </h5> </a>
                <a href="<?php echo base_url()?>index.php/Controller/viewInputFunction" class="list-group-item list-group-item-action"> 
                    <h5>Back To  Insert </h5> </a>
                <a href="<?php echo base_url()?>index.php/Controller/viewDeleteFunction" class="list-group-item list-group-item-action"> 
                    <h5>Back To  Delete </h5> </a>
                <a href="<?php echo base_url()?>index.php/Controller/viewUpdateFunction" class="list-group-item list-group-item-action"> 
                    <h5>Back To  Update </h5> </a>
                <a href="<?php echo base_url()?>index.php/Controller/viewTableFunction" class="list-group-item list-group-item-action"> 
                    <h5>Back To  Print The Table </h5> </a>
                <a href="<?php echo base_url()?>index.php/Controller/viewRowFunction" class="list-group-item list-group-item-action"> 
                    <h5>Back To  Print The Row </h5> </a>
            </div>
        </center>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </body>
</html>
