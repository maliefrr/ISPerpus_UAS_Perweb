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
                <h2 class="text-center mt-4">Data Buku</h2>
                <div class="mhs_button mt-4">
                    <button class="btn" style="background-color: rgb(255, 198, 11);" onclick="window.location.replace('add_data_buku.php')">Tambah Data</button>
                    <div class="logout">
                        <a href="dashboard_admin.php" class="btn btn-primary badge mt-3">back</a>
                    </div>
                </div>
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Judul Buku</th>
                            <th scope="col">Nama Pengarang</th>
                            <th scope="col">Nama Penerbit</th>
                            <th scope="col">Tahun Terbit</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $data = $db -> query("SELECT * FROM buku");
                            $number = 1;
                            while($data_buku = $data -> fetch_array()){
                                ?>
                                    <tr>
                                    <th scope="row"><?php echo $number?></th>
                                    <td><?php echo $data_buku['judul_buku'] ?></td>
                                    <td><?php echo $data_buku['nama_pengarang']?></td>
                                    <td><?php echo $data_buku['nama_penerbit']?></td>
                                    <td><?php echo $data_buku['tahun_terbit']?></td>
                                    <td>
                                    <a class="btn btn-primary badge" href="edit_buku.php?id=<?php echo $data_buku['id_buku']?>">Edit</a>
                                    <a class="btn btn-danger badge" href="./controller/delete_buku.php?id=<?php echo $data_buku['id_buku'] ?>">Delete</a>
                                    </td>
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