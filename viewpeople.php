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
 </div>
 <form action="searchevent.php" method="POST">
          <button class="btn btn-secondary" type="submit">Search</button>
          <input type="text" name="search" placeholder="Search for ID">
</form>
<br/>
<?php 
              if(isset($_GET['id']))
                   {
                       $id = $_GET['id'];
                   }
                   $con = con();
                    $sql = "SELECT * FROM peoples WHERE people_id = ?";

                    $stmt = $con->prepare($sql);
                    //$stm->execute(array($id));
                    $stmt->execute(array($id));
                //  $row2 = $stm->fetch(PDO::FETCH_ASSOC);
                    
                    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
              foreach ($res as $row) {
                  echo '<center><h1>'.$row['people_fname'].' '.$row['people_lname'].'</h1></center>';
              }
          ?>
  <div class="form-group">          
 <form action="eventpeople.php" method="post">
   <input type="submit" name="join" id="post" class="btn btn-info" value="Join Event" />
              <?php 
                  $rows = people();
                  foreach ($rows as $row) {  
              ?>
              <input type="hidden" value="<?php echo $row['people_id']; ?>" name="people"/>
              <?php } ?>
      <select name = "event">
           <?php 
                $rows = event();
                foreach ($rows as $row) {
           ?> 
           <option value="<?php echo $row['event_id']; ?>"><?php echo $row['event_name']; ?></option>
          <?php } ?>
      </select>
   </form>
 </div>

  <table class="table table-bordered">
      <thead>
        <tr><center><h2>Event Joined</h2></center></tr>
        <tr>
         <th>Event ID</th>   
          <th>Event Name</th>
          <th>Event Type</th>  
          <th>Event Date & Time</th>          
          <th>Status</th>
          
          <th>Action</th>

            <?php  
                   
                  $sql = "SELECT * FROM events e, event_people p WHERE e.event_id = p.event_id AND p.people_id = ?";
                  $con = con();
                  $stmt = $con->prepare($sql);
                  $stmt->execute(array($id));
                  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  foreach($rows as $row)
                 
                  {
                        echo '<tr><td>'.$row['event_id'].'</td>';
                        echo '<td>'.$row['event_name'].'</td>';
                        echo '<td>'.$row['event_type'].'</td>';
                        echo '<td>'.date('M d, Y', strtotime($row['event_date'])).' '.date('h:m A', strtotime($row['event_time'])).'</td>';
                        echo '<td>'.$row['status'].'</td>';
                        
                        echo '<div class="cell">';
                              echo '<td>
                              <a href="quit.php?id='.$row['event_id'].' "> <input type="submit" class="btn btn-info btn-sm" value="Quit"></a>
                              <a href="viewevent.php?id='.$row['event_id'].' "><input type="submit" class="btn btn-info btn-sm" value="Details"></a>
                              </td></tr>';
                          echo '</div>';             
                  }
              ?>                    

        </tr>
     </thead>
    </table>
  
</body>
</html>