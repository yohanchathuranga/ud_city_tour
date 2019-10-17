
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "./assert/css/update.css" ?>">
        <style>
            #container {
                width:100%;
                height:100%;
            }
            #wrapper {
                width:95%;
                height:100%;
            }
            #detail {
                
                height:425px;
            }
            
            </style>

        <div id="container">
            <div id="wrapper">
                 <br><br><br><h1>Update Your Trips </h1><br><hr/><br><br>
                <div id="menu">
                   
                    <!-- Fetching Trip ids Of All customtrips From Database -->
                    <ol>
                        <?php foreach ($customtrips as $customtrip): ?>
                        <li><a href="<?php echo base_url() . "index.php/insert_ctrl_y/update_trip_id1/" . $customtrip->Trip_ID; ?>"><?php echo $customtrip->Trip_ID; ?></a>
                        </li><?php endforeach; ?>
                    </ol>
                </div>
                <div id="detail">
                    <!-- Fetching All Details of Selected customtrips From Database And Showing In a Form -->
                    <?php foreach ($single_customtrip as $customtrip): ?>
                    <br><h4>Edit Detail & Click Update Button</h4><br><br><br>
                    <form method="post" action="<?php echo base_url() . "index.php/insert_ctrl_y/update_trip_id1"?>">
                        <center>
                            <label id="hide">Id :</label>
                            <input type="text" id="hide" name="tid" value="<?php echo $customtrip->Trip_ID; ?>"><br>
                            <label>Date :</label><br>
                            <input type="date" name="date" value="<?php echo $customtrip->Date; ?>"><br>
                            <label>Pickup Time :</label>
                            <input type="time" name="pickup_time" value="<?php echo $customtrip->Pickup_Time; ?>"><br>
                            <label>No of Days :</label>
                            <input type="text" name="day_count" value="<?php echo $customtrip->Day_Count; ?>"><br>
                            <label>Pickup Point :</label>
                            <input type="text" name="pickup_point" value="<?php echo $customtrip->Pickup_point; ?>"><br>
                            <label>Destination :</label>
                            <input type="text" name="destination" value="<?php echo $customtrip->Destination; ?>"><br>
                            <label>Estimated Distance :</label>
                            <input type="text" name="est_distance" value="<?php echo $customtrip->Est_Distance; ?>"><br>
                        
                            <input type="submit" id="submit" name="dsubmit" value="Update">
                            
                        </center>
                    </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <br><br><br>
