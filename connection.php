<?php

$con=new mysqli('localhost', 'root', '', 'shop');

if(!$con)


{
  die(mysqli_error($con));

}
?>