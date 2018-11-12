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
			<div class="login-left">
				<img src="<?php echo base_url('/assets/images/background/bg-login.png'); ?>">
				<a class="h1">Selamat Datang<br>di<br>SkyNine</a>
			</div>
			<div class="login-right">
				<form action="<?php echo site_url('register/submit'); ?>" method="post">
					<div class="h2">Daftar</div>
					<div class="form-group">
						<label class="control-label"></label>   
						<input type="text" id="nama" name="full_name_us" placeholder="Full Name" required="">  
						<span class="text-danger"><?php echo form_error('full_name_us'); ?></span>  
					</div>
					<div class="form-group">  
						<label class="control-label"></label> 
						<input type="text" id="email" name="email_us" placeholder="Email" required="">  
						<span class="text-danger"><?php echo form_error('email_us'); ?></span>
					</div>  
					<div class="form-group">  
						<label class="control-label"></label>  
						<input type="text" id="username" name="username_us" placeholder="Username" required="">  
						<span class="text-danger"><?php echo form_error('username_us'); ?></span>  
					</div>  
					<div class="form-group">  
						<label class="control-label"></label>  
						<input type="password" id="pswd" name="password_us" placeholder="Password" required="">  
						<span class="text-danger"><?php echo form_error('password_us'); ?></span>  
					</div>  
					<div class="form-group">
						<label class="control-label"></label>   
						<input type="text" id="no_telp" name="phone_num_us" placeholder="Phone Number" required="">  
						<span class="text-danger"><?php echo form_error('phone_num_us'); ?></span>  
					</div>

					<div class="checkbox-container">
						<input type="checkbox" required="" />
						<div class="text-checkbox">I agree with the terms of service.</div>
					</div> 
					<div class="button-area">
						<button type="submit" class="btn btn-secondary h3">Back</button>
						<button type="submit" class="btn btn-primary h3" name="daftar">Daftar</button>
						<a href="<?php echo site_url('login'); ?>">Login</a>
					</div>
				</form>
			</div>
		</div>
		<script src="<?php echo base_url('/assets/js/indexlogin1.js'); ?>"></script>
	</body>
</html>  