<?php include("sqlcon.php")?>

<?php

if($con->connect_error)
{
    die($con->connect_error);
}

$sql="truncate table patient";

if($con->query($sql)==true)
{
    //echo "Record inserted successfully !!";
    echo "<script>alert('Records Deleted !!')</script>";
    echo "<script>location='pshow.php';</script>";
}
else
{
    echo "Error";
}

?>