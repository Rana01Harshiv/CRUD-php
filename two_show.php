<?php
include 'connection_one.php';


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Display the data about Employees</title>
  </head>
  <body>
	<h1>data of Employees</h1>
	
	<div class = "container">
		<button type="submit" name= "submit" class="btn btn-primary">
		<a href= "one.php" class= "text-light">Add New Employee</a>
		</button>
	</div>
	
		<div class="container">
			<table class="table">
			  <thead>
				<tr>
				  <th scope="col">ID Number</th>
				  <th scope="col">Name</th>
				  <th scope="col">Adress</th>
				  <th scope="col">City</th>
				  <th scope="col">Operations</th>
				</tr>
			  </thead>
			  <tbody>
				<?php
				
					$sql= "select* from `india`";
					$result = (mysqli_query($conn,$sql));
					if($result)
					{
						while($row = mysqli_fetch_assoc($result))
						{
							$empid = $row['id'];
							$empname = $row['name'];
							$empadd = $row['address'];
							$empcity = $row['city'];
						
							echo 
								'<tr>
									<th scope="row">'.$empid.'</th>
									  <td>'.$empname.'</td>
									  <td>'.$empadd.'</td>
									  <td>'.$empcity.'</td>
					<td>
						<button class= "btn btn-primary">
						<a href= "update.php ? updateid='.$id.'" class = "text-light" >UPDATE</a>
						</button>
					</td>
					<td>
						<button class= "btn btn-primary">
						<a href= "delete.php ? deleteid='.$id.'" class = "text-light" >DELETE</a>
						</button>
					</td>
								</tr>';
						}
						
					}
				?>
			  
			  </tbody>
			</table>
		</div>










    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>