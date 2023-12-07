<?php
$cn=mysqli_connect('localhost','root','root','hall_card');
$qry="select * from dcst_view where roll_no='C16D-CS01'";
$re=mysqli_query($cn,$qry);
while($rows=mysqli_fetch_array($re)){
?>		
<tr><td><?=$rows[1];} ?></td></tr>

	<table border=1 cellspacing=0 style="float:left;">
<tr><th>Theory Subjects </th> <th>Date</th> <th>Invn. Sign</th></tr> 
<?
mysqli_free_result($re);
$qry2="select * from theory_subject where course='DCST'";
$re=mysqli_query($cn,$qry2);
while($rows=mysqli_fetch_array($re))
{	?>
<tr>	
<td><?=$rows['sub_name']?></td> <td>&nbsp;</td> <td>&nbsp;</td> <?='<br>';}?></tr>
</table>


	<table border=1 cellspacing=0 style="float:right;">
<tr><th>Pratical Subjects </th> <th>Date</th> <th>Invn. Sign</th></tr> 
<?
mysqli_free_result($re);
$qry3="select * from lab_subject where course='DCST'";
$re=mysqli_query($cn,$qry3);
while($rows=mysqli_fetch_array($re))
{?>
<tr>	
<td><?=$rows['sub_name']?></td> <td>&nbsp;</td> <td>&nbsp;</td> <?='<br>';}?></tr>
</table>
