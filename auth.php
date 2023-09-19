<?php 

session_start();
  $DB_HOST = 'localhost';
  $DB_USER = 'root';
  $DB_PASS = '';
  $DB_NAME = 'auth';

$con = mysqli_connect($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if(mysqli_connect_errno()){
  exit('Koneksi gagal. Error: '. mysqli_connect_error());
}