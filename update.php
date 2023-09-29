<?php 

session_start();
include('conn.php');
include('function.php');

$isValid = false;

if (isset($_POST['pass'])) {
  $password = $_POST['pass'];
  $number = preg_match('@[0-9]@', $password);
  $uppercase = preg_match('@[A-Z]@', $password);

  if (strlen($password) < 8 || !$uppercase || !$number) {
    myAlert("Password minimal 8 karakter, berisi angka dan huruf besar", 'profile.php');
  } else {
    $isValid = true;
  }
}

if ($isValid == true) {
  $id = $_POST['id'];
  $nama = $_POST['nama'];
  $user = $_POST['user'];
  $pass = md5($_POST['pass']);

$update = mysqli_query($con, "UPDATE akun SET nama='$nama', user='$user', pass='$pass' WHERE id='$id'");

if ($update) myAlert("User $nama telah diubah.", 'profile.php');
else echo 'Ubah profile gagal';
}