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
$w=$_POST["ward"];
$d=date("d/m/Y");
$t=date("h:i:a");

if($con->connect_error)
{
    die($con->connect_error);
}

$sql="insert into patient(name,address,mobile,age,gender,ward,date,time) values('".$n."','".$add."','".$mob."','".$a."','".$g."','".$w."','".$d."','".$t."')";

if($con->query($sql)==true)
{
    //echo "Record inserted successfully !!";
    echo "<script>alert('Record Added !!')</script>";
    echo "<script>location='pshow.php';</script>";
}
else
{
    echo "Error";
}

?>