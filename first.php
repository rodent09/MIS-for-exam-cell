	<?php
	if(@$_POST['enter'])
	{
		header('location:new.php');
	}
	if(@$_POST['update'])
	{
		header('location:update.php');
	}
	if(@$_POST['subdate'])
	{
		header('location:subject.php');
	}
	if(@$_POST['preview'])
	{
		header('location:preview.php');
	}
	?>	
<html>
<head>

	<title>Student Entry</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.content{background: #191919;padding:70px;margin:30px;border-radius:40px;}
	.header{background:  #191919;padding:20px}
	h1{color:white}
	body {
   font-family: "Lato", sans-serif;
     }

    .sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
    }

    .sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s;
   }

    .sidenav a:hover {
     color: #f1f1f1;
    }

   .sidenav .closebtn {
    position: absolute;
   top: 0;
   right: 25px;
   font-size: 36px;
   margin-left: 50px;
  }

 @media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
	
	</style>
	<link rel="icon" href="ccct_logo.PNG"  sizes="7x7">
   		<!--<a href="login.html"><img border="0"  src="ccct_logo.PNG" width="5" height="5">-->
	 <link rel="stylesheet" href="style1.css">
</head>
<body>
<div class ='header' >
<img src="ccct_logo.png" width="130" height="90" opacity:0.2 style="float:left;">
<h1>CENTRE FOR COMPUTER AND COMMUNICATION TECHNOLOGY</h1>
</div>
<form class="box"  method="post">
	
				
			<input type="submit" name="enter"value="Enter New Record" >
			<input type="submit" name="update"value="Update Existing" >
			<input type="submit" name="subdate"value="Enter Date" >	
			<input type="submit" name="preview"value="Preview" >	
				
			
		</form>
	</div>
	<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="new.php">Enter new Record</a>
  <a href="update.php">Update Record</a>
  <a href="preview.php">Preview</a>
  <a href="login.php">Log out</a>
</div>

<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>
</body>
</html>