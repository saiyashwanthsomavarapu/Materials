<?php
require('config.php');

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
<div class="container" style="margin-top:50px;">
  	<?php
  		$year = "SELECT DISTINCT(year) FROM fileupload";
  		$year_query = mysqli_query($conn,$year);

  		while($year_rows = mysqli_fetch_array($year_query))
  		{
  			$val  = base64_encode($year_rows['year']);
  	?>
  	<div class="row">
  		<div class="col s12 m12 13">
  			<a href="data.php?q=<?php echo $val; ?>"><?php echo base64_decode($val); ?> Materials</a>
  		</div>
  	</div>
  	<?php
  		}
  	?>
  </div>
	<div class="container" style="margin-top:50px;margin-bottom:150px;">
		<div class="divider"></div>
		<form action="feedback.php" method="post" style="margin-top:30px;">
			<div class="row">
				<div class="input-field col s12 m6 13">
					<input type="email" name="email" class="validate">
					<label>email</label>
				</div>
				<div class="input-field col s12 m6 13">
					<input type="text" name="name" class="validate">
					<label>name</label>
				</div>
			</div>
      		<div class="row">
        		<div class="input-field col s12">
          			<textarea id="textarea1" name="text" class="materialize-textarea"></textarea>
          			<label for="textarea1">Textarea</label>
        		</div>
      		</div>
      		<div class="right">
      			<button type="submit" class="btn-flat" style="border:1px solid grey;">Submit</button>
      		</div>
		</div>
	</form>
</div>
    <footer style="padding-top:80px;padding-bottom:50px;background-color:#eeeeee;">
      <div class="center">
          <h3 class="thin">Materials</h3>
          <small style="position:relative">Designed by skydo's </small>
      </div> 
    </footer>
</body>
</html>