<?php
include 'connection_one.php';

$id = $_GET['updateid'];
$sql="select * from `india` where id=$id";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result)
$empid = $row['id'];
$empname = $row['name']; 
$empadd = $row['address'];
$empcity = $row['city'];


if(isset($_POST['submit']))
{
		$empid = $_POST['empid'];
		$empname = $_POST['empname'];
		$empadd = $_POST['empadd'];
		$empcity = $_POST['empcity'];

			$sql = "update `india` set id = $empid , name = '$empname',address = '$empadd',city = '$empcity'";
			
			$result = (mysqli_query($conn,$sql));
			
			if($result)
			{
				//echo "data inserted successfully";
				header('location:two_show.php');
			}else
			{
				die ("you have any problem check that first". mysqli_connect_error($conn));
			}
	}
  	

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>PHP CRUD Operations </title>
  </head>
  <body>
    <h1>Hello this is PHP crud </h1>

	<div class= "container"> 
	
		<form method = "POST">
				<div class="form-group">
					<label>Enter the ID : </label>
					<input type="text" class="form-control" id="empid" name= "empid" placeholder="Enter the ID" value = "<?php echo $empid; ?>">
				</div>
				
				<div class="form-group">
					<label>Enter the Name:</label>
					<input type="text" class="form-control" id="empname" name= "empname" placeholder="Enter the Name" value= "<?php echo $empname; ?>" >
				</div>
				
				<div class="form-group">
					<label>Enter the Address:</label>
					<input type="text" class="form-control" id="empadd" name= "empadd" placeholder="Enter the Address" value = "<?php echo $empadd; ?>">
				</div>
				
				<div class="form-group">
					<label>Enter the City:</label>
					<input type="text" class="form-control" id="empcity" name= "empcity" placeholder="Enter the City" value = "<?php echo $empcity; ?>">
				</div>

			
					<button type="submit" name= "submit" class="btn btn-primary">Submit</button>
		</form>
	
	</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
	{