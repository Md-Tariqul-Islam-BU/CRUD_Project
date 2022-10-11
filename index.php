
<?php
include 'connection.php';
if(isset($_POST['submit']))
{
    $Name=$_POST['Name'];
    $Description=$_POST['Description'];
    $Quantity=$_POST['Quantity'];
	$Price=$_POST['Price'];
    $Expire_date=$_POST['Expire_date'];

    $sql="insert into product(Name,Description,Price,Quantity,Expire_date)
    values('$Name', '$Description', '$Quantity', '$Price', '$Expire_date')";
    $result=mysqli_query($con,$sql);
    if($result)
      {
         //echo "Data inserted successfully";
         header('location:show.php');

      }
      else{
        die(mysqli_error($con));
      }
}
?>


<html>
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
			<input type="text" class="form-control"  name="Name" autocomplete="off">
		  </div>

		  <div class="form-group">
			<label>Description</label>
			<input type="text" class="form-control"  name="Description" autocomplete="off">
		  </div>

		  <div class="form-group">
			<label>Quantity</label>
			<input type="text" class="form-control"  name="Quantity" autocomplete="off">
		  </div> 
		 
		  <div class="form-group">
			<label>Price</label>
			<input type="text" class="form-control"  name="Price" autocomplete="off">
		  </div>

		  <div class="form-group">
			<label>Expire_date</label>
			<input type="date" class="form-control"  name="Expire_date" autocomplete="off">
		  </div>
		  
		  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
		</form>
	</div>
  
  </body>
  
</html>