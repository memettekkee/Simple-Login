<?php

include "conn.php";
$nama = $_POST['nama'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO akun(id,nama,username,password) VALUES ('','$nama','$username','$password')";

$res = mysqli_query($conn, $sql) or die(mysqli_error($conn));
echo "Data anda telah berhasil diinput, Masukkan Username dan password anda <span><a href='login.html'><b> Disini </b></a></span>";