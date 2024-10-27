<?php
require 'connection.php';

if (isset($_POST['id'])) {
  $id = $_POST['id'];
  $kategorija = $_POST['kategorija'];
  $naziv = $_POST['naziv'];
  $opis = $_POST['opis'];
  $cena = $_POST['cena'];
  $telefon = $_POST['telefon'];
  $korisceno = $_POST['korisceno'];

  $sql = "UPDATE oglasi SET kategorija = '$kategorija', naziv = '$naziv', opis = '$opis', cena = $cena, korisceno = '$korisceno', telefon = '$telefon' WHERE id = $id";
  mysqli_query($db, $sql);
  header("Location: index.php");
}
else {
  header("Location: index.php");
}


 ?>
