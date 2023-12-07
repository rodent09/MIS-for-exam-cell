<?php
	if(@$_POST['admin'])
	{
		header('location:login.php');
	}
	if(@$_POST['guest'])
	{
		header('location:preview.php');
	}
	?>	
<html>
<head>

	<title>Student Entry</title>
	
	<style>
	.content{background: #191919;padding:70px;margin:30px;border-radius:40px;}
	.header{background:  #191919;padding:20px}
	h1{color:white}
	</style>
	<link rel="icon" href="ccct_logo.PNG"  sizes="7x7">
   		
	 <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class ='header' >
<img src="ccct_logo.png" width="130" height="90" opacity:0.2 style="float:left;">
<h1>CENTRE FOR COMPUTER AND COMMUNICATION TECHNOLOGY</h1>
</div>
<form class="box"  method="post">
	
				
			<input type="submit" name="admin"value="Admin Login" >
			<input type="submit" name="guest"value="Guest Login" >
			
			
		</form>

</body>
</html>