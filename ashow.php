<!DOCTYPE html>
<html>
    <head>
    <link rel="shortcut icon" href="fav3.png" />
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            *
            {
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .header{
                padding:2px;
                text-align:center;
                background: #1abc9c;
                color: white;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .header h1{
                font-size: 40px;
            }
            .header p{
                font-size: 20px;
            }

            .btn
            {
                color:white;
                background-color:#009879;
                border:none;
                border-radius:4px;
                cursor:pointer;
                width:280px;
                padding:6px;
                margin:20px 5px;
                text-align:center;
                font-size:15px;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                box-shadow: 4px 4px 2px grey;
            }

            .del
            {
                color:white;
                background-color:red;
                border:none;
                border-radius:4px;
                width:60px;
                padding:6px;
                text-align:center;
                font-size:15px;
                cursor:pointer;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }
            .content-table
            {
                border-collapse:collapse;
                margin: 10px 0;
                border-radius: 5px 5px 0 0;
                overflow: hidden;
                box-shadow: 0,0,0,0.15;
                width:100%;
            
            }
            .content-table thead tr
            {
                background-color: #009879;
                color: #FFFFFF;
                text-align: center;
                font-weight: bold;
                
            }
            .content-table th,
            .content-table td
            {
                padding: 10px 15px;
                text-align:center;
            }
            .content-table tbody tr
            {
                border-bottom: 1px solid #dddddd;
            }
            tr:hover
            {
                font-weight:bold;
                color:#009879;        
                background-color:#f3f3f3;
            }

        </style>
    </head>
    <body>
        <div class="header">
            <h1>HOSPITAL RECEPTION SYSTEM</h1>
            <p>Always At Your Service</p>
        </div>

        <center>
            <a href="index.php"><button class="btn">HOME</button></a>
            <a href="ainfo.php"><button class="btn">ADD APPOINTMENT</button></a>
            <a href="aclear.php"><button class="btn">CANCEL   ALL APPOINTMENTS</button></a>
        <center>

        <div style="overflow-x:auto;">
        <table class="content-table">
            <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Age</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Mobile No</th>
                <th>Date</th>
                <th>Delete</th>
            </tr>
        </thead>
            <?php
                $con=mysqli_connect('localhost','root','');

                mysqli_select_db($con,'hospital');

                $sql="select * from appointment";

                $records=mysqli_query($con,$sql);

                if($records->num_rows>0)
                {

                    $no=1;
                    while($row=mysqli_fetch_array($records))
                    {
                        echo "<tbody>";
                        echo "<tr>";
                        echo "<td>".$no."</td>";
                        echo "<td>".$row['name']."</td>";
                        echo "<td>".$row['age']."</td>";
                        echo "<td>".$row['address']."</td>";
                        echo "<td>".$row['gender']."</td>";
                        echo "<td>".$row['mobile']."</td>";
                        echo "<td>".$row['date']."</td>";
                        echo "<td><a href=adelete.php?id=".$row['no']."><button class='del'>Delete</button></a></td>";
                        echo "</tbody>";
                        $no++;
                    }

                }
                else
                {

                    print "<b><font color='red'> No Records Found !!</b>";
                }

                
            ?>

        </table>
    </body>
</html>