<?php
    include "connect.php";
    
    $nim=$_POST["nim"];
    $nama=$_POST["nama"];
    $prodi=$_POST["prodi"];
    $angkatan=$_POST["angkatan"];
    
    $sql="UPDATA mahasiswa SET nama = '$nama', prodi = '$prodi', angkatan = '$angkatan'  where nim = '$nim'";
    $hasil=mysqli_query($con,$sql);

?>