<?php
require('config.php');
session_start();
if($_SESSION['email'])
{
	$name = $_SESSION['name'];
}
else {
	header('Location:login.php');
}

$sql = "SELECT * FROM fileupload";
$result = mysqli_query($conn,$sql);
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
      	<a href="#" class="brand-logo">Logo</a>
      	<ul class="right">
      		
      		<li><?php echo $name; ?></li>
      		<li><a href="logout.php">Logout</a></li>
      	<!-- <li><img class="circle" src="book.jpg" alt="" width="50" height="50" style="margin-top:5px;"/></li> -->
      	</ul>
    </div>
  </nav>
	<div id="upload">
		<div class="container animated bounceInLeft">
			<form action ="dashp.php" method="post" enctype="multipart/form-data" style="margin-top:100px;margin-bottom:50px;">
				<div class="row">
					<p class="thin" style="font-size:30px;">Uploads Files</p>
					<div class="col s12 m12 13">
						<div class="row">
							<div class="input-field col s12 m12 13">
								<input type="text" name="subject" class="validate" id="subject">
								<label for="subject">Subject</label>
							</div>
						</div>
						<div class="row">
							<div class="inpur-field col s12 m12 13">
								<input type="text" name="year" class="validate" id="year">
								<label for="year">Year</label>
							</div>
						<div class="row">
							<div class="input-field col s12 m12 13">
								<input type="text" name="key" class="validate" id="key">
								<label for="key">Key</label>
							</div>
						</div>
						<div class="row">
							<input type="file" name="file" max-size="200000000" class="browser-default">
						</div>
						<div class="row">
							<input type="submit" name="submit" value="Upload" class="orange btn z-depth-0 right" style="border-radius:25px;padding:0px 20px 0px 20px;">
						</div>
					</div>
				</div>
			</form>
			<div class="center"  style="margin-bottom: 30px;">
				<button id="docs" class="btn-flat waves-effect z-depth-0" style="border:1px solid grey;border-radius: 25px;">View Docs</button>
			</div>
		</div>
	</div>
	<div id="documents">
		<div class="container animated bounceInRight" style="margin-top:100px;margin-bottom:100px;">
			<div class="row">
				<div class="left">
					<button id="up" class="btn-flat waves-effect" style="border:1px solid grey;border-radius:25px;">Add</button>
				</div>
				<div class="col s12 m12 13">
					<table>
						<caption>table title and/or explanatory text</caption>
						<thead>
							<tr>
								<th>Name</th>
								<th>subject</th>
								<th>type</th>
								<th>action</th>
							</tr>
						</thead>
						<?php
						while($row=mysqli_fetch_array($result))
						{
						?>	
						<tbody>
							<tr>
								<td><?php echo $row['file']; ?></td>
								<td><?php echo $row['subject']; ?></td>							
								<td><?php echo $row['keey']; ?></td>
								<td><form action="delete.php" method="post">
									<a name="id" href="delete.php?id=<?php echo $row['file']; ?>" class="btn z-depth-0 red darken-1" style="border-radius:25px;">delete</a></form>
								</td>
							</tr>
						</tbody>
						<?php
						}
						?>
					</table>
				</div>
			</div>
		</div>
	</div>
<script>
  $(document).ready(function(){
    $('#upload').show();
    $('#documents').hide();
    $('#docs').click(function(){
    	$('#upload').hide();
    	$('#documents').show();    	
    });
    $('#up').click(function(){
    	$('#upload').show();
    	$('#documents').hide();    	
    });
  });
       
</script>
    <footer style="padding-top:80px;padding-bottom:50px;background-color:#eeeeee;">
      <div class="center">
          <h3 class="thin">Materials</h3>
          <small style="position:relative">Designed by skydo's </small>
      </div> 
    </footer>

</body>
</html>