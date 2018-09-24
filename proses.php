<?php
session_start();
include("tampilkan.php");

$dir = "uploads/";
$nama_file = $_FILES["file"]["name"];
$nama_file_tmp = $_FILES["file"]["tmp_name"];
$_target_file = $dir. $nama_file;

if(move_uploaded_file($nama_file_tmp, $_target_file)){
	echo "Sukses!". "<br>";
}

$user = array(
	"nama" => $_POST["nama"],
	"Hobi" => $_POST["Hobi"],
	"file" =>$_target_file
	);
$_SESSION["user"]= $user;

print_r($user);

?>