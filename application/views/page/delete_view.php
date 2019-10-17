<link rel="stylesheet" href="<?php echo base_url()?>./assert/css/delete.css" rel="stylesheet" type="text/css">

        <style>
            #container {
                width:100%;
                height:100%;
            }
            #wrapper {
                width:95%;
                height:100%;
            }
            </style>
        <div id="container">
            <div id="wrapper">
            <br><br><h1>Delete Trip</h1><br><hr/><br><br><br>
            <div id="menu">
               
                <!--====== Displaying Fetched trips from Database in Links ========-->
                <ol>
                    <?php foreach ($customtrips as $customtrip): ?>
                    <li><a href="<?php echo base_url() . "index.php/insert_ctrl_y/trip_id2/" . $customtrip->Trip_ID; ?>"><?php echo $customtrip->Trip_ID; ?></a>
                    </li><?php endforeach; ?>
                </ol>
            </div>
            <br><br><br><br><br>
            <div id="menu">
                    <!--====== Displaying Fetched Details from Database ========-->
                <?php foreach ($single_customtrip as $customtrip): ?>
                <h4>Trip Details</h4><br><hr/>
                Trip Id : <?php echo $customtrip->Trip_ID; ?><br>
                Date : <?php echo $customtrip->Date; ?><br>
                Pickup Time : <?php echo $customtrip->Pickup_Time; ?><br>
                Day Count : <?php echo $customtrip->Day_Count; ?><br>
                Pickup Point : <?php echo $customtrip->Pickup_point; ?><br>
                Destination : <?php echo $customtrip->Destination; ?><br>
                Estimated Distance : <?php echo $customtrip->Est_Distance; ?><br>
                <!--====== Delete Button ========-->
                <a href="<?php echo base_url() . "index.php/insert_ctrl_y/delete_trip_id/" . $customtrip->Trip_ID; ?>"><br>
                <button>Delete</button></a>
                <?php endforeach; ?>
            </div>
            </div>
        </div>
