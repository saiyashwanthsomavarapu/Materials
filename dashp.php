<?php
require('config.php');

if(isset($_POST['submit']))
{
	$subject = $_POST["subject"];
	$year = $_POST['year'];
	$key = $_POST["key"];
	$file = $_FILES["file"]["name"];
	$tmp_name = $_FILES["file"]["tmp_name"]; 
	$path ='uploads/'.$file;
	$file1 = explode(".",$file);
	$ext = $file1[1];
	$allowed = array("jpg","png","pdf","docx","pptx","zip");
	if(in_array($ext,$allowed))
	{
		move_uploaded_file($tmp_name,$path);
		if($key=='material' || $key == 'ref')
		{
			$insert = "INSERT INTO fileupload(subject,year,keey,file) VALUES('$subject','$year',$key','$file')";
			$success = mysqli_query($conn,$insert) or die(mysqli_error($conn));
			if($success)
			{
				echo "success";
			}
			else
			{
				echo "not uploaded";
			}
		}
		else
		{
			echo "key is not matched";
		}
	}
	else
	{
		echo "file not allowed";
	}
}
?>