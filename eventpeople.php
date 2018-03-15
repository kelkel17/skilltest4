<?php 
	include 'dbconn.php';
	if(isset($_POST['join']))
	{
		$people = $_POST['people'];
		$event = $_POST['event'];
		$stat = "Joined";

		$sql = "INSERT INTO event_people(people_id, event_id,status) VALUES(?,?,?)";
		$con = con();
		$stmt = $con->prepare($sql);
		$stmt->execute(array($people,$event,$stat));
		 echo '<script> alert("Good Luck Pikot :)"); window.location="listpeople.php" </script>';

	}

	// if(isset($_POST['add']))
	// {
	// 	$sql = "SELECT * FROM peoples";
	// 	$con = con();
	// 	$stmt = $con->prepare($sql);
	// 	$stmt->execute();
 //        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

 //        echo '<script> alert("Good Luck Pikot :)"); window.location="viewpeople.php?id='.$row['people_id'].'" </script>';


	// }
	$con = null;

?>