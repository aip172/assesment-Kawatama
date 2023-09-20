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
    myAlert("Password minimal 8 karakter, berisi angka dan huruf besar", 'sign_up.php');
  } else {
    $isValid = true;
  }
}

if($isValid == true){
  $nama = $_POST['nama'];
  $user = $_POST['user'];
  $pass = md5($_POST['pass']);

  $insert = mysqli_query($con, "INSERT INTO akun SET nama='$nama', user='$user', pass='$pass'");

  if ($insert){
    myAlert("User $nama telah ditambahkan. Silahkan login!", 'index.php');
  }else{
    echo 'Input data gagal!';
  }
}
