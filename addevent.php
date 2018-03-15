<?php 
	include 'dbconn.php';
	if(isset($_POST['add']))
	{
			$name = $_POST['event'];
			$type = $_POST['type'];
			$date = $_POST['date'];
			$time = $_POST['time'];
			$stat = "Open";
		
			$sql = "INSERT INTO events(event_name,event_type,event_date,event_time,event_status) VALUES (?,?,?,?,?)";
			$con = con();
			$stmt = $con->prepare($sql);
			$stmt->execute(array($name,$type,$date,$time,$stat));
			echo '<script> alert("Good Luck Pikot :)"); window.location="listevent.php"</script>';
	}
	$con = null;

?>