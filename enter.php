<?php
$cn=mysqli_connect('localhost','root','root','hallcard');
if(@$_POST['submit'])
{
	$name=$_POST['name'];
	$roll=$_POST['roll_no'];
	$trade=$_POST['trade'];
	$year=$_POST['year'];
	$sem=$_POST['sem'];
	$grp=$_POST['grp'];
	$photo=$_POST['photo'];
	
	if($trade=='DCST')
	{
		$qry1=mysqli_query($cn,"Insert into dcst(roll_no,name,year) values('$roll','$name','$year');");
		$qry2=mysqli_query($cn,"insert into dcst_grp(roll_no,sem,grp) values('$roll','$sem','$grp')");
		$qry3=mysqli_query($cn,"insert into dcst_photo(roll_no,photo) values('$roll','$photo');");
		if($qry1 && $qry2 && $qry3)
		{
			echo"<script type='text/javascript'>alert('Insertion successful');</script>";
		}	
		else
		{
			echo"<script type='text/javascript'>alert('Insertion failed');</script>";
		}
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
<img src="ccct_logo.png" width="130" height="90" opacity="1" style="float:left;">
<h1>CENTRE FOR COMPUTER AND COMMUNICATION TECHNOLOGY</h1>
</div>
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="new.php">Enter new Record</a>
  <a href="#">View Record</a>
  <a href="update.php">Update Record</a>
  <a href="#">Preview</a>
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
	
				
		<td><h5>Student's Name</h5></td><td><input type="text" name="name" placeholder="name of the student"></td></tr>
		<tr>
		<td><h5>Roll No</h5></td><td><input type="text" name="roll_no" placeholder="roll_no"></td></tr>
		<tr>
	
		<td><h5>Trade</h5></td><td><input type="text" name="trade" placeholder="Trade"></td></tr>
		<tr>
		<td><h5>Year</h5></td><td><select><option value="1" name="year"> 1 </option><option value="2" name="year"> 2 </option><option value="3" name="year"> 3 </option></select></td></tr>
		<tr><td><h5>Semester</h5></td><td><select><option value="I" name="sem"> I </option> <option value="II" name="sem"> II </option> <option value="III" name="sem"> III </option> <option value="IV" name="sem"> IV </option> <option value="V" name="sem"> V </option> <option value="VI" name="sem"> VI </option> </select> </td></tr>
		<tr><td><h5>Group</h5></td><td><input type="text" name="grp" placeholder="Group"> </td></tr>
				<td><h5>Photo</h5></td><td><input type="file" name="photo" placeholder="photo"></td></tr>
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