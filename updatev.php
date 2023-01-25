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
        <title>VISITOR INFO</title>
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

            .text
            {
                border:none;
                padding:12px 20px;
                margin:5px 0;
                height:80px;
                box-shadow:2px 2px 4px grey;
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
                margin: 10px 10px;
                text-align: center;
                display: inline-block;
                font-size: 16px;
                border-radius: 12px;
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.5), 0 18px 50px 0 rgba(0,0,0,0.18);
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
                padding: 20px;
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
            <a href="vshow.php"><button>BACK</button></a>
        </center>

        <form action="" method="post">

<?php 
        include("sqlcon.php");

        date_default_timezone_set('Asia/Kolkata');

        $sql="select *from visitor where no='$_GET[id]'";
        $records=mysqli_query($con,$sql);
        $row=mysqli_fetch_array($records);

    if(isset($_POST['submit']))
    {
            

       // $no='$_GET[id]';

        $n=$_POST["name"];
        $add=$_POST["address"];
        $mob=$_POST["mobile"];
        $a=$_POST["age"];
        $g=$_POST["gender"];
        $d=date("d/m/Y");
        $t=date("h:i:a");

        if($con->connect_error)
        {
            die($con->connect_error);
        }

        //$sql="insert into patient(name,address,mobile,age,gender,date,time) values('".$n."','".$add."','".$mob."','".$a."','".$g."','".$d."','".$t."')";
        
        $sql="UPDATE visitor SET name ='$n',`address`='$add',`mobile`='$mob',`age`='$a', `gender`='$g' WHERE no='$_GET[id]'";

        if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Record Updated Successfully !!')</script>";
        echo "<script>location='vshow.php';</script>";
    }
    else
    {
        echo "Not Updated";
    }

} 
?>
        <center>
            <div class="main">
                <table>
                    <tr>
                        <td>Full Name</td>
                        <td><input type="text" name="name" value="<?php echo $row['name'];?>" autofocus></td>
                    </tr>
                    
                    <tr>
                        <td>Address</td>
                        <td><input type="text" name="address" class="text" value="<?php echo $row['address'];?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Moblie No</td>
                        <td><input type="text" name="mobile" value="<?php echo $row['mobile'];?>"></td>
                    </tr>
                    
                    <tr>
                        <td>Age</td>
                        <td><input type="text" name="age" value="<?php echo $row['age'];?>"></td>
                    </tr>

                    <tr>
                        <td>Gender<td>
                        <input type="radio" value="Male" name="gender" required
                        
                        <?php
                            if($row["gender"]=="Male")
                            {
                                echo "checked";
                            }
                        ?>
                        >Male
                        <input type="radio" value="Female" name="gender" required
                        
                        <?php
                            if($row["gender"]=="Female")
                            {
                                echo "checked";
                            }
                        ?>
                        >Female
                    </tr>

                    <?php
                        $query="select *from visitor";
                        $result1=mysqli_query($con,$query);
                    ?>
                    <tr>
                        <td>Visit</td>
                        <td>
                            <select name="visit">                
                            <?php while($row1=mysqli_fetch_array($result1)); ?> 
                                <option name="visit"><?php echo $row['visit']; ?>
                                </option>
                            </select>
                        </td>
                    </tr>

                </table>

                <input type="submit" value="Update" name="submit">
                <input type="reset" value="Reset" name="reset">

            </div>
        </center>
        </form>

        <div class="footer">
        <h2>All Rights Reserved</h2>
        </div>

    </body>
</html>