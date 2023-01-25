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
    if(isset($_POST['submit']))
    {
        $v=$_POST['visit'];
    }
?>

<?php

$n=$_POST["name"];
$add=$_POST["address"];
$mob=$_POST["mobile"];
$a=$_POST["age"];
$d=date("d/m/Y");
$t=date("h:i:a");

if($con->connect_error)
{
    die($con->connect_error);
}

$sql="insert into visitor(name,address,mobile,age,gender,visit,date,time) values('".$n."','".$add."','".$mob."','".$a."','".$g."','".$v."','".$d."','".$t."')";

if($con->query($sql)==true)
{
    //echo "Record inserted successfully !!";
    echo "<script>alert('Record Added Successfully !!')</script>";
    echo "<script>location='vshow.php';</script>";
}
else
{
    echo "Error";
}

?>