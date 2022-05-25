<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun");

//memindahkan nilai data form ke variabel sederhana agar mudah ditulis
$vemail=$_POST['email'];
$vpass=$_POST['pass'];

$sql ="INSERT INTO tbl_login SET email='$vemail',
pass='$vpass'";

mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
header("location:index.php");
?>