<?php

include('conn.php');

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

    if ($_POST['pass'] === $pass) {
      session_regenerate_id();
      $_SESSION['loggedin'] = TRUE;
      $_SESSION['nama'] = $_POST['user'];
      $_SESSION['id'] = $id;
      echo 'Welcome ' . $_SESSION['nama'] . '!';
    } else {
      echo 'Password salah!';
    }
  } else {
    echo 'Username tidak terdaftar!';
  }

  $stmt->close();
}

