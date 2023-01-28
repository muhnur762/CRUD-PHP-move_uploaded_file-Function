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
    <!-- navbar -->
    <nav class="navbar navbar-dark mb-5 shadow  fixed-top" style="background-color: #ffa500;">
        <div class="container ">
            <span class="navbar-brand mb-0 h1"><i class="bi bi-book-half"></i> Toko Buku Sejahtera</span>
        </div>
    </nav>
    <!-- end navbar -->

    <!-- card -->
    <div class="container">

        <div class="h4 pb-2 mb-4 text-dark border-bottom border-dark" style="margin-top:90px ;">
            <div class="d-flex justify-content-between">
                <h4 class="my-auto">Daftar Buku</h4>
                <a class="btn btn-warning float-end" href="tambah_buku.php" role="button"><i class="bi bi-plus-square"></i> Tambah Buku</a>
            </div>
        </div>



        <div class="row justify-content-center">

            <?php
            include("koneksi.php");
            $sql = "SELECT * FROM data_buku;";
            $query = mysqli_query($conn, $sql);
            while ($data = mysqli_fetch_array($query)) {
            ?>

                <div class="col-lg-3">
                    <div class="card mb-5 shadow position-relative" style="height:420px;">
                        <img src="assets/img/<?= $data['cover']; ?>" class="card-img-top mx-auto my-4 shadow" style="width: 130px;" alt="<?= $data['cover']; ?>">
                        <div class="card-body">
                            <h5 class="card-title"><?= $data['judul']; ?></h5>
                            <p class="card-text"><?= $data['penulis']; ?></p>
                            <a href="lihat.php?kode_buku=<?= $data['kode_buku']; ?>" style="width:90%;" class="btn btn-warning position-absolute bottom-0 start-50 mb-3 translate-middle-x ">Lihat</a>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- end card -->
    <br><br><br><br><br><br><br>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>