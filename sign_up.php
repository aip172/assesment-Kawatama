<?php include('header.php'); ?>

<body>
  <!-- header -->
  <div class="container text-center position-absolute top-50 start-50 translate-middle" id="index">
    <div class="row justify-content-center">
      <div class="col" id="header">
        <h1>Buat akun user baru</h1>
      </div>
    </div>

    <!-- form signup -->
    <form action="insert.php" method="post">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <input class="form-control mb-2" type="text" placeholder="Nama" name="nama" required>
          <input class="form-control mb-2" type="text" placeholder="Username" name="user" required>
          <input class="form-control mb-2" type="password" placeholder="Password" name="pass" required>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-2 p-0 m-0">
          <input class="btn btn-primary btn-lg" type="submit" value="Simpan" id="signup">
        </div>
      </div>
    </form>
  </div>

  <?php include('js.php'); ?>
</body>

</html>