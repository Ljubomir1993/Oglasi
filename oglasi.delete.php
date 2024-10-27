<?php
require 'connection.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "DELETE FROM oglasi WHERE id = $id";
  mysqli_query($db, $sql);
  header("Location: index.php");
}
else {
  header("Location: index.php");
}


 ?>
