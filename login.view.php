<?php $title = "Logovanje"; ?>
<?php require 'partials/head.php'; ?>
<?php require 'partials/navbar.php'; ?>
<?php $title = "Login" ?>
<h1 class="text-center text-warning">Prijavi se</h1><br>
<div class="container">
  <div class="row">
    <div class="col-6 offset-3">
      <form class="" action="login.php" method="post">
        <input type="email" name="email" placeholder="Email" class="form-control" required><br>
        <input type="password" name="password" placeholder="Password" class="form-control" required><br>
        <input type="submit" value="Login" class="btn btn-info form-control">
      </form>
    </div>
  </div>
</div>
<?php require 'partials/footer.php'; ?>
