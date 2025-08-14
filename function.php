<?php
$con = mysqli_connect("localhost", "root", "", "todolist");

if (!$con) {
	die("Koneksi Gagal : " . mysqli_connect_error());
}
?>