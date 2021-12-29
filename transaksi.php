<?php
    include "./controller/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>Library Information System</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md">
                <h2 class="text-center mt-4">Log Transaksi Peminjaman</h2>
                <div class="text-end mt-4">
                    <div class="logout">
                        <a href="dashboard_admin.php" class="btn btn-primary badge mt-3">back</a>
                    </div>
                </div>
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama Peminjam</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Tanggal Peminjaman</th>
                            <th scope="col">Tanggal Pengembalian</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $data = $db -> query("SELECT buku.judul_buku,mahasiswa.nama,transaksi.tanggal_peminjaman,transaksi.tanggal_pengembalian FROM buku INNER JOIN transaksi ON transaksi.id_buku = buku.id_buku INNER JOIN mahasiswa ON transaksi.id_mahasiswa = mahasiswa.id_mahasiswa");
                            $number = 1;
                            while($data_mahasiswa = $data -> fetch_array()){
                                ?>
                                    <tr>
                                    <th scope="row"><?php echo $number?></th>
                                    <td><?php echo $data_mahasiswa['nama'] ?></td>
                                    <td><?php echo $data_mahasiswa['judul_buku']?></td>
                                    <td><?php echo $data_mahasiswa['tanggal_peminjaman']?></td>
                                    <td><?php echo $data_mahasiswa['tanggal_pengembalian']?></td>
                                    </tr>
                            <?php
                                $number++;
                            }
                            ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-2"></div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>