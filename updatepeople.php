<?php 
  include 'dbconn.php';
  //s$con = con();
  // if(isset($_GET['id'])){
   $ID = $_GET['id'];
    
  if(isset($_POST['submit']))
  {
      
  
      $fname = trim($_POST['fname']);
      $mname = trim($_POST['mname']);
      $lname = trim($_POST['lname']);
      $phone = trim($_POST['phone']);
      $addr = trim($_POST['address']);
      $gender = trim($_POST['gender']);
      $bdate = trim($_POST['bdate']);


      updatepeople($fname,$mname,$lname,$phone,$addr,$gender,$bdate,$ID);

      echo '<script> alert("Good Luck Pikot :)"); window.location="listpeople.php" </script>';

  }
  $rows2 = people();

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />

</head>
<body>
 
 <br /><br />
 
 <div class="container">
 
  <nav class="navbar navbar-inverse">
 
   <div class="container-fluid">
 
    <div class="navbar-header">
         <a class="navbar-brand" href="#">CRUD</a>     
            <a class="navbar-brand" href="people.php">Add People</a>
                        <a class="navbar-brand" href="#">View People List</a>
     </div>
 
    <ul class="nav navbar-nav navbar-right">
 
     <!-- <li class="dropdown">
 
      <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="label label-pill label-danger count" style="border-radius:10px;"></span> <span class="glyphicon glyphicon-bell" style="font-size:18px;"></span></a>
 
      <ul class="dropdown-menu"></ul>
 
     </li>
  -->
    </ul>
 
   </div>
 
  </nav>
 
  <br />
<?php 
    foreach ($rows2 as $row) {
      if ($row['people_id'] == $ID) {

?> 
  <form method="post" id="comment_form">
 
   <div class="form-group">
    <!-- <label>Enter Subject</label> -->
    <input type="text" name="fname" placeholder="First Name" class="form-control" value="<?php echo $row['people_fname']; ?>" required>
   </div>
   <div class="form-group">
    <!-- <label>Enter Comment</label> -->
    <input type="text" name="mname" placeholder="Middle Name" class="form-control" value="<?php echo $row['people_mname']; ?>">
   </div>
   <div class="form-group">
    <!-- <label>Enter Comment</label> -->
    <input type="text" name="lname" placeholder="Last Name" class="form-control" value="<?php echo $row['people_lname']; ?>" required>
   </div>
   <div class="form-group">
    <!-- <label>Enter Comment</label> -->
    <input type="text" name="phone" placeholder="Phone Number" class="form-control" value="<?php echo $row['people_phone']; ?>" required>
   </div>
   <div class="form-group">
    <!-- <label>Enter Comment</label> -->
    <input type="text" name="address" placeholder="Address" class="form-control" value="<?php echo $row['people_address']; ?>" required>
   </div>
   <div class="form-group">
    <!-- <label>Enter Comment</label> -->
    <fieldset>
        <figcaption>Gender</figcaption>
        <input type="radio" name="gender" value="Male">Male
        <input type="radio" name="gender" value="Female">Female
    </fieldset>
   </div>
   <div class="form-group">
    <!-- <label>Enter Comment</label> -->
    <fieldset>
        <figcaption>Birthdate</figcaption>
        <input type="date" name="bdate" value="<?php echo $row['people_bdate']; ?>">
    </fieldset>
   </div> 
   <div class="form-group">
 
    <input type="submit" name="submit" class="btn btn-info" value="Update People" />
 
   </div>
 
  </form>
 
 
 </div>
 
</body>
<?php } }?>
</html>