<?php

include('session.php');
include('conn.php');

$stmt = $con->prepare('SELECT nama, user, pass FROM akun WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($nama, $user, $pass);
$stmt->fetch();
$stmt->close();
