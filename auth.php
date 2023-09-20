<?php
session_start();
include('conn.php');
include('function.php');

if (!isset($_POST['user'], $_POST['pass'])) {
  exit('Mohon isi data login');
}

if ($stmt = $con->prepare('SELECT id, pass FROM akun WHERE user = ?')) {
  $stmt->bind_param('s', $_POST['user']);
  $stmt->execute();
  $stmt->store_result();

  if ($stmt->num_rows > 0) {
    $stmt->bind_result($id, $pass);
    $stmt->fetch();

    if (md5($_POST['pass']) === $pass) {
      session_regenerate_id();
      $_SESSION['loggedin'] = TRUE;
      $_SESSION['id'] = $id;
      header('Location: home.php');
    } else {
      myAlert('Password salah!', 'index.php');
    }
  } else {
    myAlert('Username tidak terdaftar!', 'index.php');
  }

  $stmt->close();
}
