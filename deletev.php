<?php

    $con=mysqli_connect('localhost','root','');

    mysqli_select_db($con,'hospital');

    $sql="delete from visitor where no='$_GET[id]'";

    if(mysqli_query($con,$sql))
    {
        header("refresh:1;url=vshow.php");
        echo "<script>alert('Record Deleted Successfully !!')</script>";
    }
    else
    {
        echo "Not Deleted";
    }

?>
