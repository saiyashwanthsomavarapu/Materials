<?php
require('config.php');

$id = $_GET['id'];
$sql = "DELETE FROM fileupload WHERE file='$id'";
if(mysqli_query($conn,$sql))
{
	header('Location:dashboard.php');
}
?>