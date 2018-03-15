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
 <form action="searchpeople.php" method="POST">
          <button class="btn btn-info" type="submit">Search</button>
          <input type="text" name="search" placeholder="Search for ID">
</form>
<br/>
<?php 
              if(isset($_GET['id']))
                   {
                       $id = $_GET['id'];
                   }
                   $con = con();
                    $sql = "SELECT * FROM events WHERE event_id = ?";

                    $stmt = $con->prepare($sql);
                    //$stm->execute(array($id));
                    $stmt->execute(array($id));
                //  $row2 = $stm->fetch(PDO::FETCH_ASSOC);
                    
                    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
              foreach ($res as $row) {
                  echo '<center><h1>'.$row['event_name'].' '.date('M d, Y', strtotime($row['event_date'])).' '.date('h:m A', strtotime($row['event_time'])).'</h1></center>';
              }
          ?>

 

 <table class="table table-bordered">
      <thead>
        <tr><center><h2>People Joined</h2></center></tr>
        <tr>
          
         <th>People ID</th>   
          <th>People Name</th>
          <th>People Phone</th>  
          <th>People Address</th>          
          <th>Status</th>
          

            <?php  
                   
                  $sql = "SELECT * FROM peoples e, events z, event_people p WHERE e.people_id = p.people_id AND p.event_id = ?";
                  $con = con();
                  $stmt = $con->prepare($sql);
                  $stmt->execute(array($id));
                  $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                  foreach($rows as $row)
                 
                  {
                        echo '<tr><td>'.$row['people_id'].'</td>';
                        echo '<td>'.$row['people_fname'].' '.$row['people_lname'].'</td>';
                        echo '<td>'.$row['people_phone'].'</td>';
                        echo '<td>'.$row['people_address'].'</td>';
                       
                        
                        echo '<td>'.$row['event_status'].'</td>';
                        
                        echo '<div class="cell">';
                              echo '<td>
                              <a href="viewpeople.php?id='.$row['people_id'].' "><input type="submit" class="btn btn-info btn-sm" value="Details"></a>
                              </td></tr>';
                          echo '</div>';             
                  }
              ?>            

        </tr>
     </thead>
    </table>
  </div>
 
</body>
</html>