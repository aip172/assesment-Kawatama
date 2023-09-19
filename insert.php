<?php 
session_start();
include('conn.php');
include('function.php');

$nama = $_POST['nama'];
$user = $_POST['user'];
$pass = md5($_POST['pass']);

$insert = mysqli_query($con, "INSERT INTO akun SET nama='$nama', user='$user', pass='$pass'");

if ($insert){
  myAlert("User $nama telah ditambahkan. Silahkan login!", 'index.html');
}else{
  echo 'Input data gagal!';
}
?>