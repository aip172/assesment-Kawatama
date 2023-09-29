<?php
session_start();
include('session.php');
include('conn.php');
include('extract.php');
include('header.php');
?>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow fixed-top">
    <div class="container">
      <a class="navbar-brand fw-medium" href="#">Profile</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="home.php">
              <i class="bi bi-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="bi bi-person-circle"></i> Hello, <?= $nama ?>!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php">
              <i class="bi bi-box-arrow-right"></i> Keluar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- main -->
  <div class="container" id="main">
    <h2>Profil User</h2>
    <p>Ubah profil</p>
    <form action="update.php" method="post">
      <div class="row">
        <div class="col-md-5">
          <input type="hidden" name="id" value="<?= $id ?> ">
          <label for="nama">Nama :</label>
          <input class="form-control mb-2" type="text" placeholder="<?= $nama ?>" name="nama" required>
          <label for="nama">Username :</label>
          <input class="form-control mb-2" type="text" placeholder="<?= $user ?>" name="user" required>
          <label for="nama">Password :</label>
          <input class="form-control mb-4" type="password" placeholder="Password" name="pass" required>
          <div class="row justify-content-center">
            <div class="col-md-5">
              <input class="btn btn-primary btn-lg" type="submit" value="Simpan">
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>

  <?php include('js.php'); ?>
</body>

</html>