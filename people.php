<?php 
  include 'dbconn.php';
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
                        <a class="navbar-brand" href="listpeople.php">View People List</a>
                        <a class="navbar-brand" href="listevent.php">View Event List</a>
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
 
  <form method="post" id="comment_form" action="addpeople.php">
 
   <div class="form-group">
    <!-- <label>Enter Subject</label> -->
    <input type="text" name="fname" placeholder="First Name" class="form-control" required>
   </div>
   <div class="form-group">
    <!-- <label>Enter Comment</label> -->
    <input type="text" name="mname" placeholder="Middle Name" class="form-control">
   </div>
   <div class="form-group">
    <!-- <label>Enter Comment</label> -->
    <input type="text" name="lname" placeholder="Last Name" class="form-control" required>
   </div>
   <div class="form-group">
    <!-- <label>Enter Comment</label> -->
    <input type="text" name="phone" placeholder="Phone Number" class="form-control" required>
   </div>
   <div class="form-group">
    <!-- <label>Enter Comment</label> -->
    <input type="text" name="address" placeholder="Address" class="form-control" required>
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
        <input type="date" name="bdate">
    </fieldset><br>
  
    
   </div> 
   <div class="form-group">
 
    <input type="submit" name="add" id="post" class="btn btn-info" value="Add People" />
 
   </div>
 
  </form>
 
 
 </div>
 
</body>
</html>