<?php $title = "Registracija"; ?>
<?php require 'partials/head.php'; ?>
<?php require 'partials/navbar.php'; ?>
<h1 class="text-center text-warning">Dobrodošli na Oglasi PHP Aplikaciju</h1><br>
<h1 class="text-center text-warning">Registruj se</h1><br>
<div class="container">
  <div class="row">
    <div class="col-6 offset-3">
      <form class="" action="register.php" method="post">
        <input type="text" name="name" placeholder="Name" class="form-control" required><br>
        <input type="email" name="email" placeholder="Email" class="form-control" required><br>
        <input type="password" name="password" placeholder="Password" class="form-control" required><br>
        <input type="submit" value="Register" class="btn btn-primary form-control">
      </form>
    </div>
  </div>
</div>
<?php require 'partials/footer.php'; ?>
