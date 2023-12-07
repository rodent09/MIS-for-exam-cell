
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title>LOGIN</title>
<link rel="icon" href="ccct_logo.PNG" type="image/PNG" sizes="7x7">
<link rel="stylesheet" href="style.css">
<style>
.header{background:  #191919;padding:20px}
	h1{color:white}
	</style>
</head>
<body>

<div class ='header' >
<img src="ccct_logo.png" width="130" height="90" opacity:0.2 style="float:left;">
<h1>CENTRE FOR COMPUTER AND COMMUNICATION TECHNOLOGY</h1>
</div>
	<form class="box" method="POST">
		
		<h1>Login</h1>
		<input type="text" name="user" placeholder="username">
		<input type="password" name="password" placeholder="password">
		<input type="submit" name="submit" value="login">
		</form>
	
<?php
	if(@$_POST['submit'])
	{
		$username=$_POST['user'];
		$pwd=$_POST['password'];
		$cn=mysqli_connect('localhost','root','root','users');
		$qry="select * from user_table";
		$fr=mysqli_query($cn,$qry);
	if($r=mysqli_fetch_array($fr))
	{
		$u=$r['username'];
		$p=$r['password'];
	}
	if($username==$u && $pwd==$p)
	{
		header('Location:first.php');
	 echo "<script type='text/javascript'>alert('Logged in');</script>";
	}
	else
		{
			echo "<script type='text/javascript'>alert('Incorrect user');</script>";
			}
			}
			
?>
</body>
</html>