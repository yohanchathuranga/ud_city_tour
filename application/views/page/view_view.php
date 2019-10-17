<br>
<table class="table">
  <thead class="thead-dark">
  <link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(). "assert/css/view.css" ?>">
    <tr>
      <th scope="col">Trip ID</th>
      <th scope="col">Date</th>
      <th scope="col">Pickup Time</th>
      <th scope="col">No of Days</th>
      <th scope="col">Pickup Point</th>
      <th scope="col">Destination</th>
      <th scope="col">Estimated Distance</th>
    
     
    </tr>
  </thead>
    <tbody>
      <center><h2>Trips Details</h4></center>
        <?php
            foreach ($t->result() as $row)
            {
            
                echo '<tr>';
                echo '<td>'. $row->Trip_ID .'</td>';
                echo '<td>'.$row->Date.'</td>';
                echo '<td>'.$row->Pickup_Time.'</td>';
                echo '<td>'.$row->Day_Count.'</td>';
                echo '<td>'.$row->Pickup_point.'</td>';
                echo '<td>'.$row->Destination.'</td>';
                echo '<td>'.$row->Est_Distance.'</td>';
              

                
                echo '</tr>';
            }

        ?>
    </tbody>
</table>
