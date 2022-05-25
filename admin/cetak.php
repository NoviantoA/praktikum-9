<?php
$servername="localhost";
$username="root";
$password="";
$dbname = "mydb";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Koneksi gagal dibangun");

$sql ="SELECT * FROM tbl_login";
$sqy = mysqli_query($conn, $sql) or die("Proses simpan ke database gagal");
echo "<table width='75%' cellpadding='2' cellspacing='0' border='1'>
<tr>
<th>ID</th>
<th>Email</th>
<th>Password</th>";
$no=1;
while($hasil=mysqli_fetch_row($sqy)){
echo "<tr>
<td>$hasil[0]</td>
<td>$hasil[1]</td>
<td>$hasil[2]</td>
</tr>";
$no++;
}
echo "</table>";
?>
<a href="index.html">Kembali</a>