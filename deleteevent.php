<?php 
 	include 'dbconn.php';
 	$id = $_GET['id'];
 	deleteevent($id);
 	 echo '<script> alert("Good Luck Pikot :)"); window.location="listevent.php" </script>';

 ?>

