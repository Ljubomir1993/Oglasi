<?php $title = "Izmeni oglas"; ?>
<?php
require 'connection.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM oglasi WHERE id = $id";
  $query = mysqli_query($db, $sql);
  $oglas = mysqli_fetch_assoc($query);
}
else {
  header("Location: index.php");
}

 ?>
 <?php session_start(); ?>
 <?php require 'partials/head.php'; ?>
 <?php require 'partials/navbar.php'; ?>
 <h1 class="text-center text-warning">Izmenite vaš oglas za <?php echo $oglas['naziv']; ?></h1><br>
 <div class="container">
   <div class="row">
     <div class="col-6 offset-3">
       <form class="" action="oglasi.update.php" method="post">
         <input type="hidden" name="id" value="<?php echo $oglas['id']; ?>">
         <input type="text" name="kategorija" value="<?php echo $oglas['kategorija']; ?>" class="form-control" required><br>
         <input type="text" name="naziv" value="<?php echo $oglas['naziv']; ?>" class="form-control" required><br>
         <textarea name="opis" rows="4" cols="84" class="form-control"><?php echo htmlspecialchars($oglas['opis']); ?></textarea><br>
         <input type="number" name="cena" value="<?php echo $oglas['cena']; ?>" class="form-control" required><br>
         <input type="text" name="telefon" value="<?php echo $oglas['telefon']; ?>" class="form-control" required><br>
         <label for="korisceno">Stanje:</label>
         <select name="korisceno" class="form-select" style="cursor: pointer;">
           <option value="Novo" <?php echo ($oglas['korisceno'] == 'Novo') ? 'selected' : ''; ?>>Novo</option>
           <option value="Polovno" <?php echo ($oglas['korisceno'] == 'Polovno') ? 'selected' : ''; ?>>Korišćeno</option>
         </select>
         <br>
         <hr>
         <input type="submit" value="Izmeni" class="btn btn-success form-control">
       </form>
     </div>
   </div>
 </div>
 <?php require 'partials/footer.php'; ?>
