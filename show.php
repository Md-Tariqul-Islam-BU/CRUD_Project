<?php
    include 'connection.php';
    ?>

<!doctype html>
<html lang="en">
    <head> 
        <title>Assignment</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    </head>
	
    <body>
        <div class="container">
		
		<h2 style = "text-align:center; color: blue; margin: 10px 0px 25px"> <i>CRUD project in PHP</i></h2>

        <table class="table">
            <thead>
                <th scope="col">id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Quantity</th>
				 <th scope="col">Price</th>
                <th scope="col">Expire_date</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                <?php
                    $sql="select * from product";
                    $result=mysqli_query($con,$sql);
                    if($result)
                    {
                        
                        while($row=mysqli_fetch_assoc($result))
                        {
                            $id=$row['id'];
                            $Name=$row['Name'];
                            $Description=$row['Description'];
                            $Quantity=$row['Quantity'];
							$Price=$row['Price'];
                            $Expire_date=$row['Expire_date'];
                           echo '<tr>
                           <th scope="row">'.$id.'</th>
                           <td>'.$Name.'</td>
                           <td>'.$Description.'</td>
                           <td>'.$Quantity.'</td>
						   <td>'.$Price.'</td>
                           <td>'.$Expire_date.'</td>
                           <td>
                    <button class="btn btn-primary"><a href="update.php?updateid='.$id.' " class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.' " class="text-light">Delete</a></button>
                </td>
                           </tr>';
                        }

                    }


                ?>
                
            </tbody>
        </table>
		
		<button class="btn btn-primary my-5"><a href="index.php" class="text-light">Add Item</a></button>
        </div>

    </body>
</html>