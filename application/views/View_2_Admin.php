<html>
<head>
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
</head>
<body>
    <table>
        <tr>
            <th>Package_Id</th>     <!--make the table header-->
            <th>Package_type</th>
            <th>Price</th>
            <th>Day_count</th>
            <th>Description</th>
        </tr>

    <?php
        //echo "Package_Id  Package_type  Price  Day_count  Description <br><br>";
        foreach($results as $rec){
            echo "<tr><td>".$rec->Package_Id. "</td><td>" 
                .$rec->Package_type. "</td><td>" 
                .$rec->Price. "</td><td>" 
                .$rec->Day_count. "</td><td>" 
                .$rec->Description. "</td></tr>" ;
        }
        echo "</table>";
    ?>

</table>
</body>
</html>