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
            <div class="col-md-3"></div>
            <div class="col-md">
                <h2 class="text-center mt-4">Data Mahasiswa</h2>
                <div class="mhs_button mt-4">
                    <a href="add_data.php" class="btn btn-primary">Tambah Data</a>
                    <div class="logout">
                        <a href="index.php" class="btn btn-primary mt-3"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left-circle-fill" viewBox="0 0 16 16">
                        <path d="M8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0zm3.5 7.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z"/>
                        </svg></a>
                    </div>
                </div>
                <table class="table mt-4">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">NIM</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            $data = $db -> query("SELECT * FROM mahasiswa");
                            $number = 1;
                            while($data_mahasiswa = $data -> fetch_array()){
                                ?>
                                    <tr>
                                    <th scope="row"><?php echo $number?></th>
                                    <td><?php echo $data_mahasiswa['nama'] ?></td>
                                    <td><?php echo $data_mahasiswa['nim']?></td>
                                    <td>
                                    <a class="btn btn-primary badge" href="edit_mahasiswa.php?id=<?php echo $data_mahasiswa['id_mahasiswa']?>">Edit</a>
                                    <a class="btn btn-danger badge" href="./controller/delete_mahasiswa.php?id=<?php echo $data_mahasiswa['id_mahasiswa'] ?>">Delete</a>
                                    </td>
                                    </tr>
                            <?php
                                $number++;
                            }
                            ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>