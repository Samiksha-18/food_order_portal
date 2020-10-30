<?php 
	$connect = mysqli_connect('localhost','root','','test') or die('Unable to connect. Check your connection parameters.');
	mysqli_select_db($connect,'test') or die(mysqli_error($db))
?>