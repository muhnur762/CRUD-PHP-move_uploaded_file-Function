<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Data Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <?php
    include("koneksi.php");
    ?>
    <!-- navbar -->
    <nav class="navbar navbar-dark mb-5 fixed-top shadow" style="background-color: #ffa500;">
        <div class="container ">
            <span class="navbar-brand mb-0 h1"><i class="bi bi-book-half"></i> Toko Buku Sejahtera</span>
        </div>
    </nav>
    <!-- end navbar -->
    <?php
    include("koneksi.php");
    $kode_buku = $_GET['kode_buku'];
    $sql = "SELECT * FROM data_buku WHERE kode_buku = '$kode_buku';";
    $query = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($query);

    ?>

    <div class="container">
        <!-- card -->
        <div class="card mx-auto shadow" style="width: 70%; margin-top:90px;">
            <div class="card-body">
                <h5 class="card-title text-center"></h5>
                <div class="row">
                    <div class="col-lg-4">

                        <img src="assets/img/<?php echo $data['cover'] ?>" alt="<?php echo $data['cover'] ?>" width="200px" class="ms-2 mt-2 shadow">

                        <form method="POST" enctype="multipart/form-data">
                            <input type="file" class="form-control ms-2 mt-3" id="cover" name="cover" style="width: 200px ;">
                            <input type="hidden" class="form-control ms-2 mt-3" id="cover_lama" name="cover_lama" style="width: 200px ;" value="<?php echo $data['cover'] ?>">

                    </div>

                    <div class="col-lg-8">

                        <div class="row mb-3">
                            <label for="kode_buku" class="col-sm-4 col-form-label">Kode Buku :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="kode_buku" name="kode_buku" value="<?php echo $data['kode_buku'] ?> " readonly="">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="judul_buku" class="col-sm-4 col-form-label">Judul Buku : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="judul_buku" name="judul_buku" value="<?php echo $data['judul'] ?> ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="penulis" class="col-sm-4 col-form-label">Penulis :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $data['penulis'] ?> ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="penerbit" class="col-sm-4 col-form-label">Penerbit :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="penerbit" name="penerbit" value="<?php echo $data['penerbit'] ?> ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="thn_terbit" class="col-sm-4 col-form-label">Tahun Terbit :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="thn_terbit" name="thn_terbit" value="<?php echo $data['tahun_terbit'] ?> ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="jml_halaman" class="col-sm-4 col-form-label">Halaman :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="jml_halaman" name="jml_halaman" value="<?php echo $data['jml_halaman'] ?> ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="Harga" class="col-sm-4 col-form-label">Harga :</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="Harga" name="harga" value="<?php echo $data['harga'] ?> ">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="stok" class="col-sm-4 col-form-label">Stok : </label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" id="stok" name="stok" value="<?php echo $data['stok'] ?> ">
                            </div>
                        </div>
                        <div class="float-end">
                            <input type="submit" class="btn btn-warning mb-1" name="ubah" value="Ubah">
                            <a class="btn btn-warning mb-1" href="index.php" role="button"> Kembali</a>
                            <input type="submit" class="btn btn-warning mb-1" name="hapus" onclick="confirm('Apakah anda yakin akan menghapus?')" value="Hapus">
                        </div>
                        </form>

                    </div>

                </div>
            </div>


            <!-- end card -->
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['ubah'])) {
    $kode_buku = $_POST['kode_buku'];
    $judul_buku = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $thn_terbit = $_POST['thn_terbit'];
    $jml_halaman = $_POST['jml_halaman'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $nama_cover = $_FILES['cover']['name'];
    $source = $_FILES['cover']['tmp_name'];
    $folder = './assets/img/';
    $cover = $_POST['cover_lama'];






    if ($nama_cover != '') {
        move_uploaded_file($source, $folder . $nama_cover);

        $sql = "UPDATE data_buku SET `judul`='$judul_buku',`penulis`='$penulis',`penerbit`='$penerbit',`tahun_terbit`='$thn_terbit',`jml_halaman`='$jml_halaman',`harga`='$harga',`stok`='$stok',`cover`='$nama_cover' WHERE `kode_buku` = '$kode_buku'";
        $query = mysqli_query($conn, $sql);

        if (file_exists("assets/img/$cover")) {
            unlink("assets/img/$cover");
        }
        if ($sql) {
?>
            <script>
                alert("Berhasil Update");
                window.open("index.php", "_self");
            </script>
        <?php
        }
    } else {
        $sql = "UPDATE data_buku SET `judul`='$judul_buku',`penulis`='$penulis',`penerbit`='$penerbit',`tahun_terbit`='$thn_terbit',`jml_halaman`='$jml_halaman',`harga`='$harga',`stok`='$stok' WHERE `kode_buku` ='$kode_buku'";
        $query = mysqli_query($conn, $sql);


        if ($sql) {
        ?>
            <script>
                alert("Berhasil Update");
                window.open("index.php", "_self");
            </script>
        <?php
        }
    }
}


if (isset($_POST['hapus'])) {
    $kode_buku = $_POST['kode_buku'];
    $cover = $_POST['cover_lama'];



    if (file_exists("assets/img/$cover")) {
        unlink("assets/img/$cover");


        $sql = "DELETE FROM data_buku WHERE `kode_buku` = '$kode_buku';";
        $query = mysqli_query($conn, $sql);
    }

    if ($query) {
        ?>
        <script>
            window.open("index.php", "_self");
            alert("Data Berhasil Dihapus");
        </script>
<?php
    }
}
