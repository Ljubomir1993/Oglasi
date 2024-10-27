<?php $title = "Oglasi detaljno"; ?>
<?php session_start(); ?>
<?php require 'partials/head.php'; ?>
<?php require 'partials/navbar.php'; ?>
<?php
require 'connection.php';
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM oglasi WHERE id = $id";
  $query = mysqli_query($db, $sql);
  $oglasi = mysqli_fetch_assoc($query);
}

  $idKorisnika = $oglasi['idkorisnika'];
  $selektovanjeProdavca = "SELECT name, email FROM users WHERE id = $idKorisnika";
  $upit = mysqli_query($db, $selektovanjeProdavca);
  $prodavac = mysqli_fetch_assoc($upit);
 ?>

 <div class="display-4 text-center text-warning">
   <h2>
     <?php echo $oglasi['naziv']; ?>
   </h2>
   <hr>
 </div>
 <div class="container-fluid">
   <div class="row">
     <div class="col-8 offset-2">
       <h2>Opis: <span class="text-warning"><?php echo $oglasi['opis'] ?><span></h2><hr>
       <h2>Stanje: <span class="text-warning"><?php echo $oglasi['korisceno'] ?></span></h2><hr>
       <h2>Cena: <span class="text-warning"><?php echo $oglasi['cena']."€"; ?></span></h2><hr>
       <h2>Prodavac: <span class="text-warning"><?php echo $prodavac['name']; ?><span></h2><hr>
       <h2>Telefon prodavca: <span class="text-warning"><?php echo $oglasi['telefon']; ?></span></h2><hr>
       <h2>Email prodavca: <span class="text-warning"><?php echo $prodavac['email']; ?></span></h2>
     </div>
   </div>
 </div>
 <?php require 'partials/footer.php'; ?>
