<?php
session_start();
require 'connection.php';
$id = $_SESSION['id'];
$sqlBrisanjeOglasa = "DELETE FROM oglasi WHERE idkorisnika = $id";
mysqli_query($db,$sqlBrisanjeOglasa);

$sqlBrisanjeNaloga = "DELETE FROM users WHERE id = $id";
mysqli_query($db,$sqlBrisanjeNaloga);
session_destroy();
header("Location: index.php");
 ?>
