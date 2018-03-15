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
 <form action="searchpeople.php" method="POST">
          <button class="btn btn-secondary" type="submit">Search</button>
          <input type="text" name="search" placeholder="Search for ID">
</form>
<br/>
 <table class="table table-bordered">
      <thead>
        <tr>
         <th>ID</th>   
          <th>Name</th>  
          <th>Phone</th>          
          <th>Address</th>   
          <th>Gender</th>
          <th>Birthdate</th>
          
          <th>Action</th>

            <?php  

                  $rows = people();
                  foreach($rows as $row)
                 
                  {
                        echo '<tr><td>'.$row['people_id'].'</td>';
                        echo '<td>'.$row['people_fname'].' '.$row['people_lname'].'</td>';   
                        echo '<td>'.$row['people_phone'].'</td>';
                        echo '<td>'.$row['people_address'].'</td>';
                        echo '<td>'.$row['people_gender'].'</td>';
                        echo '<td>'.date('M d, Y', strtotime($row['people_bdate'])).'</td>';
                      
                        echo '<div class="cell">';
                              echo '<td> <a href="updatepeople.php?id='.$row['people_id'].' "> <input type="submit" class="btn btn-info btn-sm" value="Update"></a>
                              <a href="deletepeople.php?id='.$row['people_id'].' "> <input type="submit" class="btn btn-info btn-sm" value="Delete"></a>
                              <a href="viewpeople.php?id='.$row['people_id'].' "> <input type="submit" class="btn btn-info btn-sm" value="Details"></a></td></tr>';
                          echo '</div>';             
                  }
              ?>          

        </tr>
     </thead>
    </table>
  </div>
 
</body>
</html>