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
            <a class="navbar-brand" href="event.php">Add event</a>
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
 </div>
 <form action="searchevent.php" method="POST">
          <button class="btn btn-secondary" type="submit">Search</button>
          <input type="text" name="search" placeholder="Search for ID">
</form>
<br/>
 <table class="table table-bordered">
      <thead>
        <tr>
         <th>ID</th>   
          <th>Name</th>
          <th>Type</th>  
          <th>Date & Time</th>          
          <th>Status</th>
          
          <th>Action</th>

            <?php  

                  $rows = event();
                  foreach($rows as $row)
                 
                  {
                        echo '<tr><td>'.$row['event_id'].'</td>';
                        echo '<td>'.$row['event_name'].'</td>';
                        echo '<td>'.$row['event_type'].'</td>';
                        echo '<td>'.date('M d, Y', strtotime($row['event_date'])).' '.date('h:m A', strtotime($row['event_time'])).'</td>';
                        
                        echo '<td>'.$row['status'].'</td>';
                        
                        echo '<div class="cell">';
                              echo '<td> <a href="join.php?id='.$row['event_id'].' "><input type="submit" class="btn btn-info btn-sm" value="Join"></a>
                              <a href="cancel.php?id='.$row['event_id'].' "> <input type="submit" class="btn btn-info btn-sm" value="Cancel"></a></td></tr>';
                          echo '</div>';             
                  }
              ?>          

        </tr>
     </thead>
    </table>
  </div>
 
</body>
</html>