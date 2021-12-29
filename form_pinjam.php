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
    <title>Library Information System</title>
</head>
<body>
    <h3 class="text-center mt-4">Form Peminjaman</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md">

                <form method="POST" action="./controller/insert_pinjam.php">
                    <select class="form-select mt-4 " aria-label="Default select example" name="judul">
                        <option selected disabled="true">Judul Buku</option>
                        <?php
                            $data = $db -> query("SELECT * FROM buku");
                            while($data_buku = $data -> fetch_array()){
                        ?>
                        <option value="<?php echo $data_buku['id_buku']?>"><?php echo $data_buku['judul_buku'] ?></option>
                        <?php }?>
                    </select>
                    <select class="form-select mt-4" aria-label="Default select example" name="nama">
                        <option selected disabled="true">Nama Peminjam</option>
                        <?php
                            $data = $db -> query("SELECT * FROM mahasiswa");
                            while($data_mahasiswa = $data -> fetch_array()){
                        ?>
                        <option value="<?php echo $data_mahasiswa['id_mahasiswa']?>"><?php echo $data_mahasiswa['nama'] ?></option>
                        <?php }?>
                    </select>
                    <div class="mt-4 mb-4">
                        <label for="tanggal_pinjam" class="form-label">Tanggal Peminjaman</label>
                        <input type="date" name="tanggal_peminjaman" id="tanggal_pinjam" class="form-control">
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a class="btn btn-danger" href="dashboard_admin.php">Cancel</a>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
