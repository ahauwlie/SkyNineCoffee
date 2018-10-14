<!DOCTYPE html>  
<html lang="en">  
<head>  
	<title>Auth | Login</title>  
	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >  
	<style type="text/css">  
	.form-box{  
		max-width: 500px;  
		position: relative;  
		margin: 5% auto;  
	}  
	body{
		background-image: url(<?php echo base_url('assets/images/background/9.jpg'); ?>);
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
	}
	</style>
	<!--Favicon-->
    <link rel="shortcut icon" href="<?php echo site_url('/assets/images/logokopi.png'); ?>" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url('/assets/images/logokopi.png') ?>" type="image/x-icon">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
</head>  
<body>  
	<div class="wrapper">  
		<div class="container">  
			<div class="row">  
				<div class="form-box">  
					<div class="panel panel-primary">  
						<div class="panel-heading text-center">  
							<h3>Login</h3>  
						</div>  
						<div class="panel-body">  
							<div class="row">  
								<div class="col-sm-12">  
									<?php echo $this->session->flashdata('msg'); ?>  
								</div>  
							</div>  
							<form action="<?php echo base_url(); ?>user/registration" method="post">  
								<div class="form-group">  
									<label class="control-label" for="pswd">Username</label>  
									<div>  
										<input type="email" class="form-control" id="username" name="username">  
										<span class="text-danger"><?php echo form_error('username'); ?></span>  
									</div>  
								</div>  
								<div class="form-group">  
									<label class="control-label" for="pswd">Password</label>  
									<div>  
										<input type="password" class="form-control" id="password" name="password">  
										<span class="text-danger"><?php echo form_error('password'); ?></span>  
									</div>  
								</div> 
								<div class="form-group">   
									<div class="row">  
										<div class="col-sm-offset-5 col-sm-3 btn-submit">  
											<button type="submit" class="btn btn-success">Login</button>
										</div> 
									</div>
									<div class="text-center">
										<a class="text-center" href="#">Forgot password?</a> 
									</div>  
								</div>  
							</form>  
						</div> 
						<div class="panel-footer text-center">  
							Don't have an account? <a href="<?php echo site_url('auth/register'); ?>">Create an account</a> 
						</div>  
					</div>  
				</div>  
			</div>  
		</div>  
	</div>  
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>  
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>  
</body>  
</html>  