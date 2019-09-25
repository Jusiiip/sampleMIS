<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Main</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="login">
<h2>Welcome!</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
    <br>
    <br>
<a class="txt1 bo1 hov1" href="form.html">
							Sign up now							
						</a>
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>