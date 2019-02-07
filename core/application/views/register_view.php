<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Welcome to CodeIgniter</title>
	<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
</head>
<body>
	  <div class="container">
       <div class="row justify-content-center align-items-center" style="height:100vh">
        <div class="col-4">
					<?php
           if(isset($error_msg2)){?>
					<div class="alert alert-primary" role="alert">
						    <?=$error_msg2?>
					</div>
					<?php } ?>
				  <form  method="post" action="/Register/insertuser/">
			     <div class="form-group">
				    <label for="email">Email address</label>
				    <input type="email" class="form-control" id="email"  placeholder="Enter email">
			  	</div>
			  	<div class="form-group">
			    	<label for="password">Password</label>
			    	<input type="password" class="form-control" id="password" placeholder="Password">
			  	</div>
					<div class="form-group">
			    	<label for="confirm-password">Password</label>
			    	<input type="password" class="form-control" id="confirm-password" placeholder="Confirm Password">
			  	</div>
			  		<button type="submit" class="btn btn-primary">Register</button>
					  <a class="btn btn-primary" href="<?=site_url('/')?>">Cancel</a>
				</form>
    	</div>
</div>

<script src="/assets/js/jquery-3.3.1.min.js"></script>
<script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
