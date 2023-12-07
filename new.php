<?php

$cn=mysqli_connect('localhost','root','root','hall_card');
if(@$_POST['submit'])
{
	//print_r($_FILES);die();
	$name=$_POST['name'];
	$roll_no=$_POST['roll_no'];
	$dept=$_POST['dept'];
	$year=$_POST['year'];
	$sem=$_POST['sem'];
	$file=time().".jpg";
	$grp=$_POST['group'];
	
	move_uploaded_file($_FILES['file']['tmp_name'],"./public/img/$file");
	
	if($_POST['dept']=="DCST")
	{
		$qry=mysqli_query($cn,"Insert into dcst(roll_no,name,year) values('$roll_no','$name','$year');");
		$qry2=mysqli_query($cn,"insert into dcst_grp(roll_no,sem,grp) values('$roll_no','$sem','$grp')");
		$qry3=mysqli_query($cn,"insert into dcst_img(roll_no,image) values('$roll_no','$file')");
		echo"<script type='text/javascript'>alert('Insertion successful');</script>";
	}
	else
	{
		echo"<script type='text/javascript'>alert('Insertion failed');</script>";
	}
}

?>
<html>
<head>
	<title>Student Entry</title>
	<style>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	.content{background: #191919;padding:100px;margin:30px;border-radius:40px;}
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
	.box{padding-top:10%;}

	</style>
	<link rel="icon" href="ccct_logo.PNG" type="image/PNG" sizes="7x7">
	<link rel="stylesheet" href="style2.css">
	<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
-->
	</head>
<body>
<div class ='header' >
<img src="public/img/<?=$rows['img'];?>">
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
	
<form class="box"  method="post" enctype="multipart/form-data">
<center>
	<table>
	<tr>
	
				
		<td><h5>Name of the student</h5></td><td><input type="text" name="name" placeholder="name of the student"></td></tr>
		<tr>
		<td><h5>Enter the roll_no</h5></td><td><input type="text" name="roll_no" placeholder="roll_no"></td></tr>
		<tr>
	
		
		<tr>
		<td><h5>Enter the Department</h5></td><td><input type="text" name="dept" placeholder="Department"></td></tr>
		<tr>
		<td><h5>Enter the Year</h5></td><td><input type="text" name="year" placeholder="year"></td></tr>
		<td><h5>Enter the Semester</h5></td><td><input type="text" name="sem" placeholder="Semester"></td></tr>
		<td><h5>Enter the Group</h5></td><td><input type="text" name="group" placeholder="group"></td></tr>
				<td><h5>Photo</h5></td><td><input type="file" name="file" placeholder="photo"></td></tr>
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