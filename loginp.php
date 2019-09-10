<?php
require("config.php");
			session_start();
if(isset($_POST['email']) && isset($_POST['password']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$login_query = "SELECT * FROM loginauth WHERE email='$email'";
	$login_access = mysqli_query($conn,$login_query) or die(mysqli_error($conn));
	$count = mysqli_num_rows($login_access);
	if($count>=1)
	{
		$row = mysqli_fetch_array($login_access);
		$pass = $row['password'];
		if($pass == $password  )
		{
			$_SESSION['email'] = $row['email'];
			$_SESSION['name'] = $row['name'];
			header('Location:dashboard.php');
		}
		else
		{
			echo "enter correct username and password";
		}

	}
	else
	{
		echo "enter the correct password and username";
	}
}
?>