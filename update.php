<?php
$cn=mysqli_connect('localhost','root','root','hall_card');
if(@$_POST['roll_no'])
{
	session_start();
	$_SESSION['roll']=$_POST['roll_no'];
	header('location:update_view.php');
	
}
?>

<html>
<head>
	<title>Student Entry</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	.content{background: #191919;padding:70px;margin:30px;border-radius:40px;}
	.header{background:  #191919;padding:20px}
	h5{color: #3498db}
	h1{color: white}
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
	<link rel="icon" href="ccct_logo.PNG" type="image/PNG" sizes="7x7">
	<link rel="stylesheet" href="style3.css">
</head>
<body>

<div class ='header' >
<img src="ccct_logo.png" width="130" height="90" opacity="1" style="float:left;">
<h1>CENTRE FOR COMPUTER AND COMMUNICATION TECHNOLOGY</h1>
</div>
		<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="new.php">Enter new Record</a>
  <a href="update.php">Update Record</a>
  <a href="preview.php">Preview</a>
  <a href="login.php">log out</a>
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
	

<form class="box"  method="post">
<center>
	<table>
	
				

		<tr>
		<td><h5>Roll No</h5></td><td><input type="text" name="roll_no" placeholder="Roll No"></td></tr>
		

			<tr><td><input type="submit" name="submit"value="Save" ></td>
			<td><input type="reset" name="reset"value="reset" ></td>
			<td><input type="reset" value="back" onclick="history.back()" ></td>
			</tr>
				
			
			</table>
			</center>
		</form>
	</div>
</body>
</html>