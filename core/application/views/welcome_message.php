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

				if(isset( $this->session->userdata['logged_in'])){?>
				<div class="card">
                    <div class="card-body">
                        <span> Welcome ! </span>
						<hr>
						<a class="btn btn-primary" href="logout">Logout</a>
                    </div>
                </div>
				<?php }
				else{?>
                <div class="card">
                    <div class="card-body">
						<?php

						if(isset($error_msg)){?>
						<div class="alert alert-primary" role="alert">
						  <?=$error_msg?>
						</div>
						<?php } ?>
                        <form action="<?=site_url('login')?>" method="post">
                            <div class="form-group">
															  <label for="email">Email address</label>
                                <input type="email" class="form-control" name="username">
                            </div>
                            <div class="form-group">
															  <label for="password">Password</label>
                                <input type="password" class="form-control" name="password">
                            </div>
                            <button type="submit" class="btn btn-primary">login</button>
														<a href="Register/index" class="btn btn-primary">Register</a>
                        </form>
                    </div>
                </div>
				<?php } ?>
            </div>
        </div>
    </div>
	<script src="/assets/js/jquery-3.3.1.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
</body>
</html>
