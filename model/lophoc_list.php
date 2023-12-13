
<?php
	include_once("../publish/connect.php");
	
	$sql="SELECT lop,tenkhoa FROM lop INNER JOIN khoa ON lop"."."."makhoa = khoa".".makhoa";
	$kq=mysqli_query($conn,$sql);
?>