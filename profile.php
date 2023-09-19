<?php
session_start();
include('session.php');
include('conn.php');
include('table_akun.php')
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Profile user</title>
  <link rel="icon" type="image/x-icon" href="/assets/favicon.png">

  <!-- bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
  <!-- icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <!-- css -->
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow fixed-top">
    <div class="container">
      <a class="navbar-brand fw-medium" href="#">Data Pelamar Kerja</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="home.php"><i class="bi bi-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="profile.php"><i class="bi bi-person-circle"></i> Hello, <?= $nama ?>!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="logout.php"><i class="bi bi-box-arrow-right"></i> Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- main -->
  <div class="container" id="main">
    <h2>Profile Page</h2>
    <div>
      <p>Your account details are below:</p>
      <table>
        <tr>
          <td>Nama:</td>
          <td><?= $nama ?></td>
        </tr>
        <tr>
          <td>Username:</td>
          <td><?= $user ?></td>
        </tr>
        <tr>
          <td>Password:</td>
          <td><?= $pass ?></td>
        </tr>
      </table>
    </div>
  </div>

</body>

</html>