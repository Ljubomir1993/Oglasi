<?php session_start(); ?>
<?php $title = "Oglasi"; ?>
<?php require 'partials/head.php'; ?>
<?php require 'partials/navbar.php'; ?>
<div class="container">
  <div class="row">
    <div class="col-10 offset-1">
      <?php
        if (isset($_SESSION['id'])) {
          require 'oglasi.view.php';
        }
        else {
          echo "<img src='logoCrniOglasi.png' alt='Logo' style='height: 40rem; border-radius: 10px;' class = 'offset-1'></br><h2 class = 'text-warning'>Dobrodošli na Oglasi PHP aplikaciju, da bi ste pregledali ili okačili oglas prvo se morate <a href='register.view.php'>Registrovati</a> pa <a href='login.view.php'>Ulogovati</a> ili se Ulogovati postojećim nalogom mail: ljubomir@gmail.com i password: 123</h2></br>";
        }
       ?>
    </div>
  </div>
</div>
<?php require 'partials/footer.php'; ?>
