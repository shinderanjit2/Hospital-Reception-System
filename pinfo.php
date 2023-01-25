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
        <title>PATIENT INFO</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>

            *
            {
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            .header{
                padding:2px;
                text-align:center;
                width:100%;
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

            .main
            {
                max-width:400px;
                border-radius:5px;
                background-color:lightgrey;
                padding:20px;
                margin:20px;
                box-shadow:10px 10px 5px grey; 
            }

            table td
            {
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                font-weight:bold;
            }

            input[type=text]
            {
                border:none;
                padding:12px 20px;
                margin:5px 0;
                box-shadow:2px 2px 4px grey;
            }

            textarea
            {
                border:none;
                padding:12px 18px;
                margin:5px 0;
                height:80px;
                box-shadow:2px 2px 4px grey;
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            input[type=radio]
            {
                padding: 12px 20px;
            }

            input[type=submit]
            {
                background-color: #3311ca;
                border: none;
                color: white;
                cursor:pointer;
                padding: 10px 20px;
                margin: 10px 10px;
                text-align: center;
                display: inline-block;
                font-size: 16px;
                border-radius: 12px;
                box-shadow: 4px 4px 2px grey;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            input[type=reset]
            {
                background-color: #3311ca;
                border: none;
                color: white;
                cursor:pointer;
                padding: 10px 28px;
                margin: 10px 10px;
                text-align: center;
                display: inline-block;
                font-size: 16px;
                border-radius: 12px;
                box-shadow: 4px 4px 2px grey;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            }

            input[type=submit]:hover,
            input[type=reset]:hover
            {
                background-color: rgb(46, 89, 216);
            }

            input[type=submit]:active,
            input[type=reset]:active
            {
                background-color: rgb(24, 57, 158);
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }

            input[type=radio]
            {
                cursor:pointer;
            }

            button
            {
                background-color: #3311ca;
                border: none;
                color: white;
                cursor:pointer;
                padding: 10px 20px;
                margin: 10px;
                text-align: center;
                display: inline-block;
                font-size: 16px;
                border-radius: 12px;
                box-shadow: 4px 4px 2px grey;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

            }

            button:hover
            {
                background-color: rgb(46, 89, 216);
            }

            button:active
            {
                background-color: rgb(24, 57, 158);
                box-shadow: 0 5px #666;
                transform: translateY(4px);
            }

            .footer
            {
                padding: 2px;
                text-align: center;
                background: #ddd;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                //position:fixed;
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
            <a href="index.php"><button>HOME</button></a>
        </center>

        <form action="getpinfo.php" method="post">
        <center>
            <div class="main">
                <table>
                    <tr>
                        <td>Full Name</td>
                        <td><input type="text" name="name" autofocus required></td>
                    </tr>
                    
                    <tr>
                        <td>Address</td>
                        <td><textarea name="address" required></textarea></td>
                    </tr>
                    
                    <tr>
                        <td>Moblie No</td>
                        <td><input type="text" name="mobile" required></td>
                    </tr>
                    
                    <tr>
                        <td>Age</td>
                        <td><input type="text" name="age" required></td>
                    </tr>
                    
                    <tr>
                        <td>Gender<td>
                        <input type="radio" value="Male" name="gender" required>Male
                        <input type="radio" value="Female" name="gender" required>Female
                    </tr>

                    <tr>
                        <td>Select Ward</td>
                        <td>
                        <select name="ward">
                            <option value="1" name="ward">1</option>
                            <option value="2" name="ward">2</option>
                            <option value="3" name="ward">3</option>
                            <option value="4" name="ward">4</option>
                            <option value="5" name="ward">5</option>
                            <option value="6" name="ward">6</option>
                            <option value="7" name="ward">7</option>
                            <option value="8" name="ward">8</option>
                        </select>
                        </td>
                    </tr>

                </table>

                <input type="submit" value="Submit" name="submit">
                <input type="reset" value="Reset" name="reset">

            </div>
        </center>
        </form>

        <div class="footer">
        <h2>All Rights Reserved</h2>
        </div>

    </body>
</html>