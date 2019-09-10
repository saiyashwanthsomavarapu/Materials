<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>
		
	</title>
	<link  rel="stylesheet" href="animate.css"/>
 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/css/materialize.min.css">
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-alpha.4/js/materialize.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>
body,html{
	margin:0px;
	padding: 0px;
	background-color: #f6f6f6;
}
	
</style>
</head>
<body>
	<div class="container">
		<div class="row" style="margin-top:100px;">
			<div class="col s12 m12 13">
				<h3 class="thin center">Login</h3>
				<div class="card animated bounce z-depth-1" style="border-radius:6px;">
					<div class="card-content white-tex">
						<form action="loginp.php" method="post">
							<div class="row">
								<div class="input-field col s12 m12 13">
									<input type="email" id="email" name="email" class="validate" required>
									<label for="email">Login Id</label>
								</div>
							</div>							
							<div class="row">
								<div class="input-field col s12 m12 13">
									<input type="password" id="password" name="password" class="validate" required>
									<label for="password">Password</label>
								</div>
							</div>
							<div class="row">
								<!-- <a href="" class="right">forget password</a> -->
								<input type="submit" class="btn z-depth-0 left orange" style="border-radius: 25px;margin-left:30px;padding:0px 20px 0px 20px;" value="login">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>