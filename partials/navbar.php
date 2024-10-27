<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="index.php" class="navbar-brand ms-3">
        <img src="logoCrniOglasi.png" alt="Logo" style="height: 50px; border-radius: 10px;"> Oglasi PHP aplikacija
    </a>
    <ul class="navbar-nav ms-auto">
      <?php if (isset($_SESSION['id'])) : ?>
        <li class="nav-item"><a href="oglasi.novi.php" class="nav-link fw-bold pulsiraj"><i class="fa-solid fa-plus"></i> Dodaj novi oglas</a></li>
        <li class="nav-item"><a href="moji.oglasi.php" class="nav-link fw-bold"><i class="fa-regular fa-user"></i> <?php echo $_SESSION['name']; ?></a></li>
        <li class="nav-item"><a href="logout.php" class="nav-link me-3"><i class="fa-solid fa-right-from-bracket"></i> Logout</a></li>
      <?php else : ?>
        <li class="nav-item"><a href="login.view.php" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="register.view.php" class="nav-link me-3">Register</a></li>
      <?php endif; ?>
    </ul>
</nav>
<hr>
