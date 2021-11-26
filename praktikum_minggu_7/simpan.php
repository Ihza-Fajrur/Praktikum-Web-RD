<?php
include ("connect.php");

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas=$_POST['kelas'];
$X = $_POST['X'];
if($X == "0"){
    $sql=mysqli_query($connect,"insert into siswa set nama='$nama', nis='$nis', kelas='$kelas'");
}
if($X == "1"){
    $sql=mysqli_query($connect,"DELETE from siswa where nis='$nis'");
}
if($X == "2"){
    $sql=mysqli_query($connect,"UPDATE siswa set nama='$nama', kelas='$kelas' where nis='$nis'");
}
?>