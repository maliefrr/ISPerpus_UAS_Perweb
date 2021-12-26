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
    <h3 class="text-center mt-4">Form Edit Data Buku</h3>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md">
                <?php 
                    $data = $db -> query("SELECT * FROM buku WHERE id_buku='$_GET[id]'");
                    $edit = $data -> fetch_array();
                ?>
                <form method="POST" action="./controller/update_buku.php">
                    <input type="hidden" name="id_buku" value="<?php echo $edit['id_buku']?>">
                    <div class="mb-3">
                        <label for="judul_buku" class="form-label">Judul Buku</label>
                        <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo $edit['judul_buku']?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_pengarang" class="form-label">Nama Pengarang</label>
                        <input type="text" class="form-control" id="nama_pengarang" name="nama_pengarang" value="<?php echo $edit['nama_pengarang']?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nama_penerbit" class="form-label">Nama Penerbit</label>
                        <input type="text" class="form-control" id="nama_penerbit" name="nama_penerbit" value="<?php echo $edit['nama_penerbit']?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <input type="number" min="1900" max="2099" step="1" class="form-control" id="tahun_terbit" name="tahun_terbit" value="<?php echo $edit['tahun_terbit']?>" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <button type="reset" class="btn btn-danger">Cancel</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>