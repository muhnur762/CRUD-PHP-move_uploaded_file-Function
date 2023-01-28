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


    <div class="container">
        <!-- card -->
        <div class="card mx-auto " style="width: 70%; margin-top:90px;">
            <div class="card-body shadow">
                <h5 class="card-title text-center">Form Tambah Buku</h5>
                <form method="POST" enctype="multipart/form-data">
                    <div class="row mb-3">
                        <label for="kode_buku" class="col-sm-2 col-form-label">Kode Buku :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="kode_buku" name="kode_buku" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="judul_buku" class="col-sm-2 col-form-label">Judul Buku : </label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="judul_buku" name="judul_buku" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="penulis" class="col-sm-2 col-form-label">Penulis :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="penulis" name="penulis" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="penerbit" class="col-sm-2 col-form-label">Penerbit :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="penerbit" name="penerbit" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="thn_terbit" class="col-sm-2 col-form-label">Tahun Terbit :</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="thn_terbit" name="thn_terbit" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="jml_halaman" class="col-sm-2 col-form-label">Halaman :</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="jml_halaman" name="jml_halaman" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Harga" class="col-sm-2 col-form-label">Harga :</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="Harga" name="harga" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="stok" class="col-sm-2 col-form-label">Stok :</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control" id="stok" name="stok" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="cover" class="col-sm-2 col-form-label">Cover :</label>
                        <div class="col-sm-10">
                            <input type="file" class="form-control" id="cover" name="cover" required>
                        </div>
                    </div>
                    <div class="float-end">
                        <a class="btn btn-warning" href="index.php" role="button">Kembali</a>
                        <input type="submit" class="btn btn-warning " name="simpan" value="simpan">
                    </div>
                </form>
            </div>
        </div>


        <!-- end card -->
        <br><br>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>

<?php
if (isset($_POST['simpan'])) {
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


    move_uploaded_file($source, $folder . $nama_cover);


    $sql = "INSERT INTO data_buku (`kode_buku`,`judul`,`penulis`,`penerbit`,`tahun_terbit`,`jml_halaman`,`harga`,`stok`,`cover`) VALUES ('$kode_buku','$judul_buku','$penulis','$penerbit','$thn_terbit','$jml_halaman','$harga','$stok','$nama_cover')";
    $query = mysqli_query($conn, $sql);


    if ($query) {
?>
        <script>
            alert("Data Buku Berhasil Ditambahkan!");
            window.open("index.php", "_self");
        </script>
    <?php
    } else {
    ?>
        <script>
            alert("Data Buku Gagal Ditambahkan!");
            window.open("tambah_buku.php", "_self");
        </script>
<?php


    }
}
?>