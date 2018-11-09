<!DOCTYPE html>  
<html lang="en">  
<head>  
	<title>Auth | Login</title>  
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
	<link rel='stylesheet' type='text/css' href="<?php echo base_url('/assets/css/login_register.css'); ?>"/>
	<!--Favicon-->
    <link rel="shortcut icon" href="<?php echo site_url('/assets/images/logokopi.png'); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url('/assets/images/logokopi.png') ?>" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=1.0, user-scalable=0">
</head>  
	<body>
		<div class="login-wrapper">
			<div class="login-left1">
				<img src="<?php echo base_url('/assets/images/background/bg-login.png'); ?>">
				<a class="h1">klik disini<br>untuk<br>masuk</a>
			</div>
			<div class="login-right1">
				<form action="<?php echo site_url('auth/register/submit'); ?>" method="post">
					<div class="h2">Masuk</div>
					<div class="form-group">  
						<label class="control-label" for="pswd">Username</label>  
						<div>  
							<input type="text" id="username" name="username" required="">  
							<span class="text-danger"><?php echo form_error('username'); ?></span>  
						</div>  
					</div>  
					<div class="form-group">  
						<label class="control-label" for="pswd">Password</label>  
						<div>  
							<input type="password" id="password" name="password" required="">  
							<span class="text-danger"><?php echo form_error('password'); ?></span>  
						</div>  
					</div> 

					<div class="checkbox-container">
						<input type="checkbox" required="" />
						<div class="text-checkbox">I agree with the terms of service.</div>
					</div> 
					<div class="button-area">
						<button type="submit" class="btn btn-secondary h3">Back</button>
						<button type="submit" class="btn btn-primary h3" name="daftar">Masuk</button>
						<a href="<?php echo site_url('auth/register/index'); ?>">Daftar</a>
					</div>
				</form>
			</div>
		</div>
		<script src="<?php echo base_url('/assets/js/indexlogin1.js'); ?>"></script>
	</body>
</html>  