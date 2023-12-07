<?php
	
	if(@$_POST['home'])
	{
		header('location:home.php');
	}
	if(@$_POST['preview'])
	{
		session_start();
		$_SESSION['roll']=$_POST['roll_no'];
		$_SESSION['dept']=$_POST['trade'];
		$_SESSION['sem']=$_POST['sem'];
		header('location:form.php');
		
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
	</style>
	<link rel="icon" href="ccct_logo.PNG" type="image/PNG" sizes="7x7">
	<link rel="stylesheet" href="style3.css">
</head>
<body>
<div class ='header' >
<img src="ccct_logo.png" width="130" height="90" opacity="1" style="float:left;">
<h1>CENTRE FOR COMPUTER AND COMMUNICATION TECHNOLOGY</h1>
</div>	
</body>
<form class="box"  method="POST">
<center>
	<table>		
		<tr>
		<td>
		<h5>Roll No</h5></td>
		<td><input type="text" name="roll_no" placeholder="Roll No"></td></tr>
		<tr>
		<td>
		<h5>Department</h5></td>
		<td><select><option value='DCST' name='trade'>DCST</option> <option value='DCIE' name='trade'>DCIE</option> <option value='DEE' name='trade'>DEE</option> <option value='DENC' name='trade'>DENC</option></select></td></tr>
		<tr>
		<td>
		<h5>Semester</h5></td>
		<td><select><option value='I' name='sem'> I </option> <option value='II' name='sem'> II </option> <option value='III' name='sem'>III</option> <option value='IV' name='sem'> IV </option> <option value='V' name='sem'> V </option> <option value='VI' name='sem'> VI </option></select></td></tr>
	        <tr>
			<td>
			<input type="submit" name="preview"value="preview" >
			</td>
		    <td>
			<input type="submit" name="home"value="home" >
			</td>
			</table>
			</center>
		</form>
	</div>

</html>
				
			
	
	