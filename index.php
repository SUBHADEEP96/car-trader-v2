<?php
session_start();
include('php/config.php');


if(isset($_POST['login']))
  {
    $adminuser=$_POST['username'];
    $password=md5($_POST['password']);
    $query=mysqli_query($con,"select ID from tbladmin where  UserName='$adminuser' && Password='$password' ");
    $ret=mysqli_fetch_array($query);
    if($ret>0){
      
	echo "<script>window.location.href='home.php';</script>";
    

    }
    else{
    $msg="Invalid Details.";
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
	  <!--font awesome-->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha256-eZrrJcwDc/3uDhsdt61sL2oOBY362qM3lon1gyExkL0=" crossorigin="anonymous" />

    <title>Welcome To CarTrader.com</title>
	
	<style>
	
	.fm{
		
		height:280px;
		width:400px;
		
		padding:20px;
		
		
		
	}
	
	.btn{
		
		border:2px solid black;
		
	}
	
	</style>
  </head>
  <body><br><br>
  
    <div class="container col-lg-3">
	<div class="fm bg-dark">
	
	<h2 class="text-center text-white"><i class="fa fa-fighter-jet" aria-hidden="true"></i></h2>
	<hr  style="width:100px;background:white;height:2px">
	
	<form align="center" action="" method="post" >
	
  <div class="form-group">
    <input type="text" class="form-control"  placeholder="Username" name="username">
  </div>
  <div class="form-group">
    <input type="password" class="form-control"  placeholder="Password" name="password">
  </div>
  
  <a type="submit" class="btn btn-default px-5" name="login" href="home.php"><i class="fa fa-sign-in" aria-hidden="true"></i>
 Login</a>
</form>
</div>
	
	
	</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>