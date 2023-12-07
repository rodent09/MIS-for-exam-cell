<html>
<head>
<style>

</style>
</head>
<body>
<?php
$con=mysqli_connect('localhost','root','root','hall_card');
session_start();
$roll=$_SESSION['roll'];
$depart=$_SESSION['dept'];
$sem=$_SESSION['sem'];

$qry="select * from dcst_view2 where roll_no='$roll';";
$fr=mysqli_query($con,$qry);
while($rows=mysqli_fetch_array($fr))
{
	?>
<center>
<table border=1 cellspacing=0 cellpadding=0 >
<tr height=30>
<td width=800  align=center  bgcolor=#FFFFFF ><font style=font-size:19pt face="Times New Roman" color=#000000>&nbsp;<img src="sikkim_logo.jpg" style="float:left;height:80px;width:80px;padding:10px;"><img src="ccct_logo.png" style="float:right;height:100px;width:100px;"> <br>State Board Of Technical Education ( SBTE) </font><br><br><font style=font-size:13pt face="Arial">Under Directorate of Technical Education, HRD Department,<br>Governemnt of Sikkim</font><br></td>
</tr>
<tr height=10>
<td width=800 align=center >
</tr>
<tr height=30>
<td width=800  align=center  bgcolor=#FFFFFF ><font style=font-size:14pt face="Arial" >HALL TICKET-EVEN SEMESTER REGULAR EXAMINATION JUNE 2019<br></font></td>
</tr>
<tr height=10>
<td width=800 align=center >
</tr>
<tr height=30>
<td width=800 align=left><font style=font-size:15 face="Arial"><br>&emsp;&nbsp;<b><img src="public/img/<?=$rows['image'];?>" style="float:right;height:90px;width:90px;padding-right:20px;"> ROLL NO:&emsp;<?=$rows['roll_no'];?><br><br>&emsp;&nbsp;NAME:&emsp;&emsp;&ensp;<?=$rows['name'];?><br><br>&emsp;&nbsp;SEM:&emsp;<?=$rows['sem'];?>&emsp;&emsp;GROUP:&emsp;<?=$rows['grp']; } ?><br><br>&ensp;&emsp;INSTITUTE:&emsp;CCCT</b><br><table border=0 cellpadding=0 cellspacing=0>
<tr>
<td width=800 align=right><font style=font-size:8pt face="Arial" color=#000000>Examination Controller, SBTE&emsp;&emsp;&emsp;&emsp;[Specimen Signature of Candidate]&ensp;<br><br></font></td>
</tr>
</table></td>
</tr>
<tr>
<td width=800><font style=font-size:18pt face="Times new Roman">&emsp; - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -&emsp;</font>
<table border=0 cellpadding=0 cellspacing=0>
<tr>
<td width=800 align=center><font style=font-size:10pt face="Arial Narrow"><b>INSTRUCTION TO CANDIDATES:</b></font></td>
</tr>
<tr height=14 >
<td width=729 align=left bgcolor=#FFFFFF><font style=font-size:8pt face="Arial" color=#000000>&emsp;&ensp;1. This Hall Ticket should be produced on demand to the Examination Coordinator or any person authorised in this behalf along with the ID card issued  by </font></td>
</tr>
<table border=0 cellspacing=0 cellpadding=0 >
<tr height=12 >
<td width=16  align=left> <br></td><td width=729  align=left  bgcolor=#FFFFFF><font style=font-size:8pt face="Arial" color=#000000>the Institute during the time of examination.</FONT></TD>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0>
<tr height=12>
<td width=16 align=left><br></td><td width=729 align=left bgcolor=#FFFFFF><font style=font-size:8pt face="Arial" color=#000000>2. The Examination hall will be opened each day 15 minutes before the specefied time. </FONT></TD>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0>
<tr height=12>
<td width=16  align=left> <br></td><td width=729 align=left bgcolor=#FFFFFF><font style=font-size:8pt face="Arial" color=#000000>3. A seat marked with his/her Roll No will be allotted to each candidates. They will require to find out and occupy their alloted seats.</FONT></TD>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0>
<tr height=12 >
<td width=16 align=left> <br></td><td width=729  align=left bgcolor=#FFFFFF><font style=font-size:8pt face="Arial" color=#000000>4. Before the Examination starts candidates are to write on the title page of the Answer Booklet the subject, Roll No, subject codes.</FONT></TD>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0>
<tr height=12>
<td width=16  align=left> <br></td><td width=729  align=left  bgcolor=#FFFFFF><font style=font-size:8pt face="Arial" color=#000000>    Do not write anything on the other pages of the booklet untill and unless asked for.</FONT></TD>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 >
<tr height=12 >
<td width=16  align=left > <br></td><td width=729  align=left bgcolor=#FFFFFF ><font style=font-size:8pt face="Arial" color=#000000>5 .Instruments box scale, pencil, pen calculator should be brought individually. Additional Answer sheets, Graph sheets, </FONT></TD>
</TR>
</TABLE>
<table border=0 cellspacing=0 cellpadding=0 >
<tr height=12 >
<td width=16  align=left> <br></td><td width=729  align=left  bgcolor=#FFFFFF ><font style=font-size:8pt face="Arial" color=#000000>    Estimation sheets etc will be provided during the Examination.</FONT></TD>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 >
<tr height=12 >
<td width=16  align=left> <br></td><td width=729  align=left bgcolor=#FFFFFF ><font style=font-size:8pt face="Arial" color=#000000>6. The candidates found guilty of any of the following shall be liable for cancellation of his/her examination OR debarred from appearing even other </FONT></TD>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 >
<tr height=12 >
<td width=16  align=left> <br></td><td width=729  align=left bgcolor=#FFFFFF><font style=font-size:8pt face="Arial" color=#000000>subjects.</FONT></TD>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 >
<tr height=12 >
<td width=16  align=left> <br></td><td width=729  align=left  bgcolor=#FFFFFF ><font style=font-size:8pt face="Arial" color=#000000>&emsp; a)  Writing name/putting signature OR any mark to disclose in any way the identity of the candidate.</FONT></TD>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 >
<tr height=12 >
<td width=16  align=left> <br></td><td width=729  align=left  bgcolor=#FFFFFF ><font style=font-size:8pt face="Arial" color=#000000>&emsp; b)  Having possession of books, notes ,paper OR any other copying material.</FONT></TD>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 >
<tr height=12 >
<td width=16  align=left> <br></td><td width=729  align=left  bgcolor=#FFFFFF ><font style=font-size:8pt face="Arial" color=#000000>&emsp; c)  Recieving or giving any assistance directly or indirectly or copying in any form during the Examination.</FONT></TD>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 >
<tr height=12 >
<td width=16  align=left> <br></td><td width=729  align=left  bgcolor=#FFFFFF ><font style=font-size:8pt face="Arial" color=#000000>&emsp; d)  Tearing/tampering with Answer booklet.And any other type of misconduct of a serious nature or deliberate previous arrangement to cheat during </FONT></TD>
</tr>
</table>
<table border=0 cellspacing=0 cellspacing=0 >
<tr height=12 >
<td width=16  align=left> <br></td><td width=729  align=left  bgcolor=#FFFFFF ><font style=font-size:8pt face="Arial" color=#000000>Examination. </font></td>
</tr>
</table>
<table border=0 cellspacing=0 cellpadding=0 >
<tr height=12>
<td width=16 align=left> <br></td><td width=729 align=left bgcolor=#FFFFFF><font style=font-size:8pt face="Arial" color=#000000>7. Candidates can be physically searched by the Examination Coordinator/Invigilators before and during the course of Examination.</FONT></TD>
</table>
<table border=0 cellspacing=0 cellpadding=0>
<tr height=12>
<td width=16 align=left> <br></td><td width=729 align=left bgcolor=#FFFFFF><font style=font-size:8pt face="Arial" color=#000000>8. If Hall Ticket is lost, duplicate can be issued from the Examination Cell on payment of Rs 200/- with prior permission from the Principal.</font></td>
</tr>
</table>
<table>
<tr height=20s>
<td width=800><font style=font-size:18pt face="Times new Roman">&emsp; - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -&emsp;</font></td>
</tr>
</table>

<table>
<tr>
<td width=800 align=center><font style=font-size:14pt face="Calibri">Time Table for the Semester</font></td>
</table>
<center><table border=1 width=350 cellspacing=0 cellpadding=2 style="float:left;margin:5px;">
<tr>
<th ><font style=font-size:11pt>THEORY SUBJECTS NAME</th> <th> DATE </th> <th> INV. SIGN </th> </font>
</tr>
<?
mysqli_free_result($fr);
$cn=mysqli_connect('localhost','root','root','hall_card');
$qry2="select * from theory_subject where course='DCST' and sem='VI'";
$fr=mysqli_query($cn,$qry2);
while($rows=mysqli_fetch_array($fr)){
?>
<tr>
<td><?=$rows['sub_name']?></td> <td>&nbsp;</td> <td>&nbsp;</td> <?='<br>';}?>
</tr>
</table>
<table border=1 cellspacing=0  width=350 style="float:right;margin:5px;">
<tr><th><font style=font-size:11pt>PRACTICAL SUBJECTS NAME</th> <th>DATE</th> <th>INV. SIGN.</th></font></tr> 
<?

$qry3="select * from lab_subject where course='DCST'";
$re=mysqli_query($cn,$qry3);
while($rows=mysqli_fetch_array($re))
{?>
<tr>	
<td><?=$rows['sub_name']?></td> <td>&nbsp;</td> <td>&nbsp;</td> <?='<br>';}?></tr>
</table>
<br><br><br><br><br>
</center>

</table></td><br><br><br>
</table>
</center>

</body>
</html>