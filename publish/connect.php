<?php
	$conn=mysqli_connect('localhost','root','','hoclaptrinh') or die('Không kết nối được DB');
	$lang=mysqli_query($conn,"SET NAMES 'utf8'");
?>