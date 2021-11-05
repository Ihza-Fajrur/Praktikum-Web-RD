<?php
    include "connect.php";

    $nim=$_POST["nim"];
    
    $sql="DELETE from mahasiswa WHERE nim = ('$nim')";

    $hasil=mysqli_query($con,$sql);

?>