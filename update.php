<?php
include 'connection.php';
$id=$_GET['updateid'];
$sql="Select * from `product` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$Name=$row['Name'];
$Description=$row['Description'];
$Quantity=$row['Quantity'];
$Price=$row['Price'];
$Expire_date=$row['Expire_date'];

if(isset($_POST['submit']))
{
    $Name=$_POST['Name'];
    $Description=$_POST['Description'];
    $Quantity=$_POST['Quantity'];
	$Price=$_POST['Price'];
    $Expire_date=$_POST['Expire_date'];

    $sql="update `product` set id='$id',Name='$Name', Description='$Description', Quantity='$Quantity', Price='$Price', Expire_date='$Expire_date' 
    where id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
      {
         //echo "Updated successfully";
         header('location:show.php');

      }
      else{
        die(mysqli_error($con));
      }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Assignment</title>
  </head>
  <body>
  <div class="container my-5">
  <form method="post">
  <div class="form-group">
    <label>Name</label>
    <input type="text" class="form-control"  name="Name" autocomplete="off" value=<?php echo $Name;?>>
  </div>

 
  <div class="form-group">
    <label>Description</label>
    <input type="text" class="form-control"  name="Description" autocomplete="off" value=<?php echo $Description;?>>
  </div>
  
  <div class="form-group">
    <label>Quantity</label>
    <input type="text" class="form-control" placeholder="Quantity of the product" name="Quantity" autocomplete="off" value=<?php echo $Quantity;?>>
  </div>
  
  <div class="form-group">
    <label>Price</label>
    <input type="text" class="form-control" name="Price" autocomplete="off" value=<?php echo $Price;?>>
  </div>


  <div class="form-group">
    <label>Expire_date</label>
    <input type="date" class="form-control"  name="Expire_date" autocomplete="off" value=<?php echo $Expire_date;?>>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Update</button>
</form>



  </div>

    
  </body>
</html>