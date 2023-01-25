<?php include("sqlcon.php")?>

<?php

if($con->connect_error)
{
    die($con->connect_error);
}

$sql="truncate table appointment";

if($con->query($sql)==true)
{
    //echo "Record inserted successfully !!";
    echo "<script>alert(' All Appointments Deleted Successfully !!')</script>";
    echo "<script>location='ashow.php';</script>";
}
else
{
    echo "Error";
}

?>