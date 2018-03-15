<?php
  include 'dbconn.php';

  $id = $_GET['id'];
  joinevent($id);
  header("Location: listjoinevent.php")
?>