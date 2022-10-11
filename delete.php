<?php
include 'connection.php';
if(isset($_GET['deleteid']))
{

    $id=$_GET['deleteid'];

    $sql= "delete from `product` where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        //echo "deleted successfully";
        header('location:show.php');
    }
    else
    {
        die(mysqli_error($con));
    }
}


?>