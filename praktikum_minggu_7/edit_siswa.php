<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
<style>
        /* Style the body */
        body {
        font-family: Arial;
        margin: 0;
        }

        /* Header/Logo Title */
        .header {
        padding: 60px;
        text-align: center;
        background: #1abc9c;
        color: white;
        font-size: 30px;
        height: 10%;
        }

        /* Page Content */
        .content {padding:20px;}
        </style>
        </head>
        <body>

        <div class="header">
        <p>Sistem Basis Data Siswa Sekolah SDN X Bogor </p>
        </div>

        <style>
        ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        }

        li {
        float: left;
        }

        li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        }

        li a:hover {
        background-color: #111;
        }
        </style>
        </head>
        <body>

        <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="tambah_siswa.php">Daftarkan Siswa Baru</a></li>
        <li><a href="hapus_siswa.php">Keluarkan Siswa</a></li>
        <li><a href="edit_siswa.php">Ubah Data Siswa</a></li>
        </ul>

        <div class="global-container">
        <div class="card login-form">
            <form method="post" class="formAdd">
                <div class="form-floating mb-3">	
                    <input type="text" class="form-control" id="floatingInput" placeholder="Masukkan NIS" name="nis"><br>
                    <label for="floatingInput">NIS</label>
                </div>
                <div class="form-floating mb-3">	
                    <input type="text" class="form-control" id="floatingInput" placeholder="Masukkan Nama Siswa" name="nama"><br>
                    <label for="floatingInput">Nama</label>
                </div>
                <div class="form-floating mb-3">	
                    <input type="text" class="form-control" id="floatingInput" placeholder="Masukkan NIS" name="kelas"><br>
                    <label for="floatingInput">Kelas</label>
                </div>
                <input value="2" name="X" type="hidden">
                <div class="d-grid gap-2">
                <button type="submit" class="btnSave">Edit</button>
                </div>
            </form>
        </div>
    </div>

        <!-- <div class="global-container">
            <div class="card login-form">
                <form method="post" class="formAdd">	
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Masukkan NIS" name="nis">
                        <label for="floatingInput">NIS</label>
                    </div>
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="floatingInput" placeholder="Masukkan Nama" name="nama">
                        <label for="floatingInput" >Nama</label>
                    </div>
                    <div class="form-floating mb-3">
                        <label>Kelas</label>
                        <input type="text" class="form-control" id="floatingInput" placeholder="Masukkan Kelas" name="kelas"><br>    
                    </div>
                    <input value="2" name="X" type="hidden">
                    <div class="d-grid gap-2">
                        <button type="submit" class="btnSave">Edit</button>
                    </div>
                </form>
            </div>
        </div> -->
     <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="fungsi.js"></script>
</body>
</html>