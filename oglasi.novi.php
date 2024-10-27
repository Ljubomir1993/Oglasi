<?php $title = "Novi oglas"; ?>
<?php session_start(); ?>
<?php require 'partials/head.php'; ?>
<?php require 'partials/navbar.php'; ?>
<?php

  if (isset($_SESSION['id'])) {
    // code...
  }
  else {
    header("Location: index.php");
  }

 ?>
<h1 class="text-center text-warning">Dodajte novi oglas</h1><br>
<div class="container">
  <div class="row">
    <div class="col-6 offset-3">
      <form class="" action="oglasi.php" method="post">
        <input type="text" name="kategorija" placeholder="Kategorija" class="form-control" required><br>
        <input type="text" name="naziv" placeholder="Naziv" class="form-control" required><br>
        <textarea name="opis" rows="4" cols="84" placeholder="Opis Proizvoda..." class="form-control"></textarea><br>
        <input type="number" name="cena" placeholder="Cena" class="form-control" required><br>
        <input type="text" name="telefon" placeholder="Telefon" class="form-control" required><br>
        <label for="korisceno">Stanje:</label>
        <select name="korisceno" class="form-select" style="cursor: pointer;">
            <option value="Novo">Novo</option>
            <option value="Polovno">Korišćeno</option>
        </select>
        <br>
        <hr>
        <input type="submit" value="Sačuvaj" class="btn btn-success form-control">
      </form>
    </div>
  </div>
</div>
<?php require 'partials/footer.php'; ?>
