<?php
session_start();
if(!isset($_SESSION['username']))
{
    echo "<script>alert('You must login first !!')</script>";
    echo "<script>location.href='login.php'</script>";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="shortcut icon" href="fav3.png" />
        <title>INDEX PAGE</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
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

            .btn-group
            {
                align-content: center;
                padding: 5px;;
            }

            .btn-group button
            {
                background-color: #3311ca;
                border: none;
                color: white;
                padding: 10px 20px;
                margin: 10px 10px;
                text-align: center;
                display: inline-block;
                font-size: 16px;
                border-radius: 12px;
                cursor:pointer;
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.5), 0 18px 50px 0 rgba(0,0,0,0.18);
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

            }

            .btn-group button:hover
            {
                background-color: rgb(46, 89, 216);
            }

            .btn-group button:active
            {
                background-color: rgb(24, 57, 158);
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }


            .box
            {
                max-width:400px;
                border-radius:100px;
                background-color:lightgrey;
                text-align:center;
                padding:40px;
                margin:60px;
                box-shadow:10px 10px 5px grey;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            }

            .counter
            {
                font-size:80px;
                font-weight: 500;
                font-family: sans-serif;
                color: blcak;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .text
            {
                font-size:30px;
                font-weight: 30;
                font-family: sans-serif;
                color: black;
            }


            .footer
            {
                padding: 20px;
                text-align: center;
                background: #ddd;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                position:fixed;
                left:0;
                bottom:0;
                width:100%;
            }
        </style>
    </head>
    <body>
        <div class="header">
            <h1>HOSPITAL RECEPTION SYSTEM</h1>
            <p>Always At Your Service</p>
        </div>
        <center>
            <div class="btn-group">

                    <a href="pinfo.php"><button>ADD PATIENT</button></a>
                    <a href="pshow.php"><button>SHOW PATIENT</button></a>
                    <a href="vinfo.php"><button>ADD VISITOR</button></a>
                    <a href="vshow.php"><button>SHOW VISITOR</button></a>
                    <a href="ainfo.php"><button>ADD APPOINTMENT</button></a>
                    <a href="ashow.php"><button>SHOW APPOINTMENT</button></a>
                    <a href="logout.php"><button>LOGOUT</button></a>

            </div>
        
            <table>
                <tr>   
                    <td>
                        <div class="box">
                            <div class="counter">
                                <?php
                                    include("sqlcon.php");

                                    $con=new mysqli($server,$user,$pass,$db);

                                    $sql="select name from patient";
                                    $records=mysqli_query($con,$sql);

                                    $row=mysqli_num_rows($records);
                                    echo " $row ";
                                ?>
                            </div>
                            <div class="text">TOTAL PATIENTS</div>
                        </div>
                    </td>
                            
                    <td>
                        <div class="box">
                                <div class="counter">
                                    <?php
                                        include("sqlcon.php");

                                        $con=new mysqli($server,$user,$pass,$db);

                                        $sql="select name from visitor";
                                        $records=mysqli_query($con,$sql);

                                        $row=mysqli_num_rows($records);
                                        echo " $row ";
                                    ?>
                                </div>
                                <div class="text">TOTAL VISITORS</div>
                            </div>
                    </td>
                    <td>
                        <div class="box">
                                <div class="counter">
                                    <?php
                                        include("sqlcon.php");

                                        $con=new mysqli($server,$user,$pass,$db);

                                        $sql="select name from appointment";
                                        $records=mysqli_query($con,$sql);

                                        $row=mysqli_num_rows($records);
                                        echo " $row ";
                                    ?>
                                </div>
                                <div class="text">TOTAL APPOINTMENTS</div>
                            </div>
                    </td>
                </tr>

            </table>
        <center>

        <div class="footer">
        <h2>All Rights Reserved</h2>
        </div>
    </body>
</html>