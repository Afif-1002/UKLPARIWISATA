<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Halo</title>
</head>
<body>
<div class="signup-form">
    <form action="LoginProcess.php" method="post" enctype="multipart/form-data">
		<h2>Login</h2>
		<p class="hint-text">Enter Login Details</p>
        <div class="form-group">
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="Passw" class="form-control" name="Passw" placeholder="Passw" required="required">
        </div>
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
        <div class="text-center">Don't have an account? <a href="Register.php">Register Here</a></div>
		<div class="text-center">You Are the Person? <a href="loginadmin.php">Come Here</a></div>
    </form>
</div>
<!DOCTYPE html>
<html lang="en">
<head>