<?php 
	include 'dbconn.php';
	if(isset($_POST['add']))
	{
			$fname = $_POST['fname'];
			$mname = $_POST['mname'];
			$lname = $_POST['lname'];
			$phone = $_POST['phone'];
			$addr = $_POST['address'];
			$gender = $_POST['gender'];
			$bdate = $_POST['bdate'];
		//	$event = $_POST['event'];

			$sql = "INSERT INTO peoples(people_fname,people_mname,people_lname,people_phone,people_address,people_gender,people_bdate) VALUES (?,?,?,?,?,?,?)";
			$con = con();
			$stmt = $con->prepare($sql);
			$stmt->execute(array($fname,$mname,$lname,$phone,$addr,$gender,$bdate));
			$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

			echo '<script> alert("Good Luck Pikot :)"); window.location="viewpeople.php" </script>';
	}
	$con = null;

?>