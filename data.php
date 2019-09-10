<?php
require('config.php');
$year = base64_decode($_GET['q']);
$material = "SELECT * FROM fileupload WHERE keey='material' AND year='$year'";
$result = mysqli_query($conn,$material) or die(mysqli_error($conn));

$ref = "SELECT * FROM fileupload WHERE keey='refe' AND year='$year'";
$result1 = mysqli_query($conn,$ref) or die(mysli_error($conn));
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link  rel="stylesheet" href="animate.css"/>
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
	body,html{
		margin:0px;
		padding:0px;
	}
</style>
</head>
<body>
<nav class="blue">
    <div class="nav-wrapper">
      	<a href="#" class="brand-logo">Materials</a>
    </div>
  </nav>
	<div class="container" style="margin-top:50px;margin-bottom:150px;">
		<div class="row">
			<h3 class="thin ">Materials</h3>
			<table>
				<thead>
					<tr>
						<th>File</th>
						<th>Subject</th>
						<th>Download</th>					
					</tr>
				</thead>
				<?php
				while($row = mysqli_fetch_array($result))
				{
				?>
				<tbody>
					<tr>
						<td><?php echo $row['file']; ?></td>
						<td><?php echo $row['subject']; ?></td>
						<td><a href="uploads/<?php echo $row['file'];?>" download="<?php echo $row['file'];?>">Download</a></td>
					</tr>
				</tbody>
				<?php
				}
				?>
			</table>
		</div>
		<div class="row" style="margin-top:100px;">
			<h3 class="thin"> Reference Material</h3>
			<table>
				<caption class="red-text">Reference documents and PPts</caption>
				<thead>
					<tr>
						<th>File</th>
						<th>Subject</th>
						<th>Download</th>
					</tr>
				</thead>
				<?php
				while($gets = mysqli_fetch_array($result1))
				{
				?>
				<tbody>
					<tr>
						<td><?php echo $gets['file']; ?></td>
						<td><?php echo $gets['subject']; ?></td>
						<td><a href="uploads/<?php echo $gets['file'];?>" download="<?php echo $gets['file'];?>">Download</a></td>
					</tr>
				</tbody>
				<?php
				}
				?>
			</table>
		</div>
	</div>
    <footer style="padding-top:80px;padding-bottom:50px;background-color:#eeeeee;">
      <div class="center">
          <h3 class="thin">Materials</h3>
          <small style="position:relative">Designed by skydo's </small>
      </div> 
    </footer>
</body>
</html>