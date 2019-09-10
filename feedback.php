<?php
require('config.php');
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$name = $_POST['name'];
	$text = $POST['text'];

	$sql = "INSERT INTO feedback(email,name,message) VALUES('$email','$name','$text')";
	if(mysqli_query($conn,$sql))
	{
		header('Location:index.php');
	}
	else
	{
		echo "not submitted";
	}
}
?>