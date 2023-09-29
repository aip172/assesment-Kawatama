<?php include('header.php'); ?>

<body>
  <!-- header -->
  <div class="container text-center position-absolute top-50 start-50 translate-middle" id="index">
    <div class="row justify-content-center">
      <div class="col" id="header">
        <img class="img-fluid" id="logo" src="https://www.kawatama.com/kawatama/images/favicon.png" alt="">
        <img class="img-fluid" src="https://www.kawatama.com/assets/images/setting/_Logo%20241%20x%2042.png" alt="">
        <h1>Junior Programmer Assessment</h1>
      </div>
    </div>

    <!-- form login -->
    <form action="auth.php" method="post">
      <div class="row justify-content-center">
        <div class="col-md-5">
          <input class="form-control mb-2" type="text" placeholder="Username" id="username" name="user" required>
          <input class="form-control mb-2" type="password" placeholder="Password" id="pass" name="pass" required>
          <div class="row justify-content-start">
            <div class="col-md-4 mb-2">
              <a href="sign_up.php">Buat akun</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 p-0 m-0">
          <input class="btn btn-primary btn-lg" type="submit" value="Masuk" id="signin">
        </div>
      </div>
    </form>
  </div>

  <?php include('js.php'); ?>
</body>

</html>