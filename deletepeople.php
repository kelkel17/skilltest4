<?php 
 	include 'dbconn.php';
 	$id = $_GET['id'];
 	deletepeople($id);
 	 echo '<script> alert("Good Luck Pikot :)"); window.location="listpeople.php" </script>';

 ?>

