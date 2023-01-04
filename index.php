<?php
//index.php
include 'connect.php';
if(isset($_POST['submit']))
{

	if((!isset($_POST['name']))||(!isset($_POST['email']))||(!isset($_POST['mobile']))||(!isset($_POST	   ['password'])))
	{
		$error = "*". "Please fill all the fields ";
	}else
	  {
	      $name=$_POST['name'];
	      $email=$_POST['email'];
	      $mobile=$_POST['mobile'];
	      $password=$_POST['password'];

  $sql = " insert into `user` (name, email, mobile, password)values('$name','$email','$mobile','$password')";
  $result=(mysqli_query($conn,$sql));

  if($result){
    // echo "data inserted successfully";
    header('location:display.php');
  }else{
    die (mysqli_connect_error($conn));
  }
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
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>PHP crud</title>
</head>

<body>
  <div class="container my-5">
    <form method="POST">
      <div class="form-group">
        <label>Enter your name </label>
        <input type="text" class="form-control" id="name" name="name" required placeholder="Enter your name" autocomplete="off" >
      </div>

      <div class="form-group">
        <label>Enter your Email </label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your email" autocomplete="off" >
      </div>

      <div class="form-group">
        <label>Enter your mobile number</label>
        <input type="mobile" class="form-control" id="mobile" name="mobile"  placeholder="Enter your mobile number" autocomplete="off" >
      </div>

      <div class="form-group">
        <label>Password</label>
        <input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" autocomplete="off">
      </div>
      <button type="submit" name="submit" id="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


</body>

</html>