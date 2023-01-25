<?php include("sqlcon.php")?>

        <?php
            date_default_timezone_set('Asia/Kolkata');
        ?>

<?php
    if(isset($_REQUEST['gender']))
    {
        $g=$_REQUEST['gender'];
    }
    else
    {
        echo " Please Select The Gender !!";
    }
?>

<?php

$n=$_POST["name"];
$add=$_POST["address"];
$mob=$_POST["mobile"];
$a=$_POST["age"];
$d=$_POST["date"];

if($con->connect_error)
{
    die($con->connect_error);
}

$sql="insert into appointment(name,address,mobile,age,gender,date) values('".$n."','".$add."','".$mob."','".$a."','".$g."','".$d."')";

if($con->query($sql)==true)
{
    //echo "Record inserted successfully !!";
    echo "<script>alert('Appointment Added !!')</script>";
    echo "<script>location='ashow.php';</script>";
}
else
{
    echo "Error";
}

?>