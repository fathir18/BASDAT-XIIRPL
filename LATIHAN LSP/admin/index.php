<html>
<head>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css">
    <title>Tambah Data</title>
</head>
<body>
<center>
    <ul>
        <li>
            <a>
                <img src="https://cdn.svgator.com/images/2021/08/logo-animation-example-conversable.gif">Latihan LSP
            </a>
        </li>
    </ul><br>    
    <?php
    session_start();
    if($_SESSION['status']!='login'){
        header('location:../login.php?pesan=belum_login');
    }
    ?>
    <marquee direction="left"><h4>Welcome <?php echo $_SESSION['admin'] ?> anda telah login</h4></marquee>
        <p class="script">
            <span>Menampilkan Data</span>
        </p>
    </h1>

    <table class="table" border="1">
    <tr>
        <th>ID Buku</th>
        <th>Katalog</th>
        <th>Judul Buku</th>
        <th>Pengarang</th>
        <th>Tahun Terbit</th>
        <th>Penerbit</th>
        <th><center>Aksi</center></th>
        </tr>
        <!-- Menampilkan data table -->
        <?php
        include '../koneksi.php';
        $buku = mysqli_query($koneksi, "select * from buku");
        foreach ($buku as $row){
            echo "<tr>";
            echo "<td>".$id_buku = $row['id_buku']."</td>";
            echo "<td>".$id_katalog = $row['id_katalog']."</td>";
            echo "<td>".$judul_buku = $row['judul_buku']."</td>";
            echo "<td>".$pengarang = $row['pengarang']."</td>";
            echo "<td>".$tahun_terbit = $row['thn_terbit']."</td>";
            echo "<td>".$penerbit = $row['penerbit']."</td>";
            ?>
            <td>
            <center>
                <a href="update.php?id_buku=<?php echo $row['id_buku']?>" type="button" class="btn btn-warning">EDIT</a>
                <a href="proses-delete.php?id_buku=<?php echo $row['id_buku']?>" type="button" class="btn btn-danger">HAPUS</a>
            </center>
            </td>
            <?php
            echo "</tr>";
        }
        ?>
        <a href="add.php" type="button" class="btn btn-primary">Tambah Buku</a>
        <a style="width: 40px;">
        <a href="add_anggota.php" type="button" class="btn btn-info">Tambah Anggota</a>
    </table>
    <a href="../logout.php">LOGOUT</a>
</center>
</body>
</html>