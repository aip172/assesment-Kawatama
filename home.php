<?php
session_start();
include('session.php');
include('extract.php');
include('header.php');
?>

<body>
  <!-- navbar -->
  <nav class="navbar navbar-expand-lg bg-primary navbar-dark shadow fixed-top">
    <div class="container">
      <a class="navbar-brand fw-medium" href="#">Data Asesi</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">
              <i class="bi bi-house"></i> Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="profile.php"><i class="bi bi-person-circle">
              </i> Hello, <?= $nama ?>!</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="logout.php"><i class="bi bi-box-arrow-right">
              </i> Keluar</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- end navbar -->

  <!-- content -->
  <div class="container" id="main">
    <div class="row justify-content-center">
      <div class="card mb-3" id="card">
        <div class="row g-0">
          <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- end content -->

  <?php include('js.php'); ?>
</body>

</html>