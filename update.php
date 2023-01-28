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

    if ($nama_cover != '') {
        move_uploaded_file($source, $folder . $nama_cover);

        $sql = "UPDATE data_buku SET `judul_buku`='$judul_buku',`penulis`='$penulis',`penerbit`='$penerbit',`tahun_terbit`='$thn_terbit',`jml_halaman`='$jml_halaman',`harga`='$harga',`stok`='$stok',`cover`='$nama_cover' WHERE `kode_buku` = '$kode_buku'";
        $query = mysqli_query($conn, $sql);

        $cover = $data['cover'];

        if (file_exists("assets/$cover")) {
            unlink("assets/$cover");
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
        $sql = "UPDATE data_buku SET `judul_buku`='$judul_buku',`penulis`='$penulis',`penerbit`='$penerbit',`tahun_terbit`='$thn_terbit',`jml_halaman`='$jml_halaman',`harga`='$harga',`stok`='$stok' WHERE `kode_buku` = '$kode_buku'";
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
