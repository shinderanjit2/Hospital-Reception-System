<?php

    $con=mysqli_connect('localhost','root','');

    mysqli_select_db($con,'hospital');

    $sql="delete from appointment where no='$_GET[id]'";

    if(mysqli_query($con,$sql))
    {
        header("refresh:1;url=ashow.php");
        echo "<script>alert('Appointment Deleted Successfully !!')</script>";
    }
    else
    {
        echo "Not Deleted";
    }

?>
