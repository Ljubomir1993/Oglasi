<?php $title = "Pretraženi oglasi"; ?>
<?php session_start(); ?>
<?php require 'partials/head.php'; ?>
<?php require 'partials/navbar.php'; ?>
<?php
require 'connection.php';

if (isset($_GET['search'])) {
  $search = $_GET['search'];
  $sql = "SELECT * FROM oglasi WHERE kategorija = '$search' OR naziv = '$search' OR cena = '$search'";
  $query = mysqli_query($db, $sql);
  $oglasi = mysqli_fetch_all($query, MYSQLI_ASSOC);

  if (count($oglasi) == 0) {
    header("Location: index.php?error=1");
  }
}

$id = $_SESSION['id'];
 ?>

<div class="container">
  <div class="row">
    <div class="col-10 offset-1">
      <div class="container-fluid">
            <div class="row">
              <div class="col-8 offset-2">
                <h3 class="display-4 text-center">Pretraži oglase</h3>
                <form action="oglasi.info.php" method="get">
                  <div class="input-group">
                    <input type="text" name="search" class="form-control" placeholder="<?php if (isset($_GET['error'])) {
                      echo "Ništa nije pronađeno, pokušajte ponovo";
                    }else {
                      echo "Pretraži";
                    } ?>">
                    <div class="input-group-append">
                      <button type="submit" name="btnSub" class="btn btn-primary"><i class="fa-solid fa-magnifying-glass"></i> Pretraži</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <br>
            <br>
            <div class="row">
          <div class="col-10 offset-1">
              <div class="row">
                  <?php foreach ($oglasi as $index => $oglas) : ?>
                      <div class="col-3">
                          <div class="card text-center d-flex justify-content-between align-items-center" style="background-color: #d4edda;">
                              <div class="card-header">
                                  <?php if ($oglas['idkorisnika'] == $id) : ?>
                                    <a href="oglasi.izmeni.php?id=<?php echo $oglas['id']; ?>" class="icon-link" title="Izmeni"><i class="fa-regular fa-pen-to-square text-primary"></i></a>
                                  <?php endif; ?>
                                  <span class="mx-4"><?php
                                      $naziv = $oglas['naziv'];
                                      if (strlen($naziv) > 12) {
                                          echo substr($naziv, 0, 12) . '...';
                                      } else {
                                          echo $naziv;
                                      }
                                      ?></span>
                                  <?php if ($oglas['idkorisnika'] == $id) : ?>
                                    <a href="oglasi.delete.php?id=<?php echo $oglas['id']; ?>" class="icon-link" title="Obriši"><i class="fa-solid fa-trash-can text-danger"></i></a>
                                  <?php endif; ?>
                              </div>
                              <div class="card-body">
                                  <?php
                                  $naziv = $oglas['opis'];
                                  if (strlen($naziv) > 32) {
                                      echo substr($naziv, 0, 32) . '...';
                                  } else {
                                      echo $naziv;
                                  }
                                  ?>
                              </div>
                              <div class="card-footer">
                                  <button class="btn btn-primary btn-sm" style="margin-right: 10px;"><?php echo $oglas['cena'] . "€"; ?></button>
                                  <button class="btn btn-<?php echo $oglas['korisceno'] != "Novo" ? "warning" : "success"; ?> btn-sm"><?php echo $oglas['korisceno'] == "Novo" ? "Novo" : "Polovno"; ?></button>
                                  <hr>
                                  <span><i>Kontakt telefon:</i> <b><?php echo $oglas['telefon'] != null ? $oglas['telefon'] : "/"; ?></b></span>
                                  <hr>
                                  <a href="detaljni.oglas.php?id=<?php echo $oglas['id']; ?>"><button type="button" name="button" class="btn btn-success">Detaljnije</button></a>
                              </div>
                          </div>
                      </div>
                      <?php if (($index + 1) % 4 == 0 && $index + 1 < count($oglasi)) : ?>
                          <hr style="width: 100%; margin: 20px 0;">
                      <?php endif; ?>
                  <?php endforeach; ?>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
 <?php require 'partials/footer.php'; ?>
