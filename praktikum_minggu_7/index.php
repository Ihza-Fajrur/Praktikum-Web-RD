<!DOCTYPE html>
<html>
    <head>
        <title>Database Mahasiswa</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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

        <ul>
        <li><a class="active" href="index.php">Home</a></li>
        <li><a href="tambah_siswa.php">Daftarkan Siswa Baru</a></li>
        <li><a href="hapus_siswa.php">Keluarkan Siswa</a></li>
        <li><a href="edit_siswa.php">Ubah Data Siswa</a></li>
        </ul>
           
    </form>
    <style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
        <table align="center" id="customers" border=1>
        </table>
        <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
        <script type="text/javascript" src="fungsi.js"></script>
    </body>
    
</html>