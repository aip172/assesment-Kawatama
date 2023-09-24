<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buat akun</title>
  <link rel="icon" type="image/x-icon" href="/assets/favicon.png">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <!-- font -->
  <link href='https://fonts.googleapis.com/css?family=Varela Round' rel='stylesheet'>
  <!-- CSS -->
  <link rel="stylesheet" href="assets/style.css">

</head>

<body>
  <!-- header -->
  <div class="container text-center position-absolute top-50 start-50 translate-middle" id="before-session">
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

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
</body>

</html>