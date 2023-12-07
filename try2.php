<?php
	$cn=mysqli_connect('localhost','root','root','hall_card');
    $qry=mysqli_query($cn,"select * from dcst_img where roll_no='05';");
    while($rows=mysqli_fetch_array(($qry))){
	?>
<html>
<body>
	<img src="public/img/<?=$rows['image'];}?>">
</body>
</html>