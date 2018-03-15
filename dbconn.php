<?php
session_start();
function con(){
	return new PDO("mysql:host=localhost;dbname=pikot;", "root","");
}
//People
function updatepeople($id,$fname,$mname,$lname,$phone,$addr,$gender,$bdate){
	  $con = con();
	  $sql = "UPDATE poeples SET people_fname = ?,people_mname = ?,people_lname = ?,people_phone = ?,people_address = ?,people_gender = ?,people_bdate = ? WHERE people_id = ?";
      $stmt = $con->prepare($sql);
      $stmt->execute(array($fname,$mname,$lname,$phone,$addr,$gender,$bdate,$id));
      $con = null;
}
function people(){
	  $con = con();
      $query = "SELECT * FROM peoples";
	  $stmt2 = $con->prepare($query);
      $stmt2->execute();
      $rows = $stmt2->fetchAll(PDO::FETCH_ASSOC);
      $con = null;
      return $rows;
}
 function deletepeople($id){
	 $con = con();
	 $sql = "DELETE FROM peoples  WHERE people_id = ?";
	 $s = $con->prepare($sql);
	 $s->execute(array($id));
	 $con = null;
}

function searchpeople($search){
	$con = con();
	$sql = "SELECT * FROM peoples
            WHERE (`people_id` LIKE '%".$search."%') OR (`people_fname` LIKE '%".$search."%') OR (`people_lname` LIKE '%".$search."%') ";
	$stmt = $con->query($sql)->fetchAll();
	
	$con = null;
	return $stmt;
}

//Events
function event(){
	  $con = con();
      $query = "SELECT * FROM events";
	  $stmt2 = $con->prepare($query);
      $stmt2->execute();
      $rows = $stmt2->fetchAll(PDO::FETCH_ASSOC);
      $con = null;
      return $rows;
}
 function deleteevent($id){
	 $con = con();
	 $sql = "DELETE FROM events  WHERE event_id = ?";
	 $s = $con->prepare($sql);
	 $s->execute(array($id));
	 $con = null;
}

function searchevent($search){
	$con = con();
	$sql = "SELECT * FROM events WHERE (event_id LIKE '".$search."%')";
	$stmt = $con->query($sql)->fetchAll();
	$con = null;
	return $stmt;
}
	function quit($id){
	$con = con();
	$stat = "Quit";
	$sql = "UPDATE event_people SET status = ? WHERE ep_id = ?";
	$stmt = $con->prepare($sql);
	$stmt->execute(array($stat, $id));
	$db = null;
	}
?>
