
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
         <a class="navbar-brand" href="listpeople.php">View People List</a>    
            <a class="navbar-brand" href="event.php">Add Event</a>
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
 
  <form method="post" id="comment_form" action="addevent.php">
 
   <div class="form-group">
    <!-- <label>Enter Subject</label> -->
    <input type="text" name="event" placeholder="Event Name" class="form-control" required>
   </div>

     <div class="form-group">
    <!-- <label>Enter Subject</label> -->
      <select name = "type">
          <option value="Event Type 1">Event Type 1</option>
          <option value="Event Type 2">Event Type 2</option>
      </select>
     </div>
    <div class="form-group">
    <!-- <label>Enter Subject</label> -->
      <fieldset>
        <figcaption>Event Date</figcaption>
          <input type="date" name="date">
     </div>
   <div class="form-group">
    <!-- <label>Enter Subject</label> -->
      <fieldset>
        <figcaption>Event Time</figcaption>
          <input type="time" name="time">
     </div>
   <div class="form-group">
 
    <input type="submit" name="add" id="post" class="btn btn-info" value="Add Event" />
 
   </div>
 
  </form>
 
 
 </div>
 
</body>
</html>