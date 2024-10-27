<?php
session_start();
require 'connection.php';

$idkorisnika = $_SESSION['id'];

if (isset($idkorisnika)) {
  $kategorija = $_POST['kategorija'];
  $naziv = $_POST['naziv'];
  $opis = $_POST['opis'];
  $cena = $_POST['cena'];
  $telefon = $_POST['telefon'];
  $korisceno = $_POST['korisceno'];
}
else {
  header("Location: index.php");
}

$sql = "INSERT INTO oglasi VALUES(NULL, '$kategorija', '$naziv', '$opis', $cena, '$korisceno', $idkorisnika, '$telefon')";

if (mysqli_query($db, $sql)) {
  header("Location: index.php");
  exit();
}
else {
  echo "Error: " . mysqli_error($db);
  exit();
}

 ?>
