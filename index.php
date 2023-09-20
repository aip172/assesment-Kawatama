<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Assessment @ Kawatama</title>
  <link rel="icon" type="image/x-icon" href="/assets/favicon.png">

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
              <a href="sign_up.php">Sign up</a>
            </div>
          </div>
        </div>
        <div class="col-md-2 p-0 m-0">
          <input class="btn btn-primary btn-lg" type="submit" value="Sign in" id="signin">
        </div>
      </div>
    </form>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
    integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
    integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa"
    crossorigin="anonymous"></script>
</body>

</html>