<?php require_once 'templates/header.php'; ?>
<div class="container mt-2">
    <div class="row">
        <div class="col-sm-9">
            <h2><i class="fa fa-building"></i>Tambah produk</h2>
        </div>
        <div class="col-sm-3">
            <a href="index.php" class="btn btn-secondary text-white btn-sm btn-outline-secondary" style="float: right;"><i class="fa fa-arrow-left"></i> Kembali </a>
        </div>
        <div class="col-sm-12">
        <form action="" method="post">
                <div class="mb-3 mt-3">
                    <label for="nama" class="form-label">Nama :</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="nama_produk">
                </div>
                <div class="mb-3 mt-3">
                    <label for="keterangan" class="form-label">Keterangan :</label>
                    <input type="text" class="form-control" id="keterangan" placeholder="Enter keterangan" name="keterangan">
                </div>
                <div class="mb-3 mt-3">
                    <label for="harga" class="form-label">Harga :</label>
                    <input type="text" class="form-control" id="harga" placeholder="Enter harga" name="harga">
                </div>
                <div class="mb-3 mt-3">
                    <label for="jumlah" class="form-label">jumlah :</label>
                    <input type="text" class="form-control" id="jumlah" placeholder="Enter jumlah" name="jumlah">
                </div>

                <button type="submit" class="btn btn-primary" name="simpan"><i class="fa fa-save"></i> Simpan</button>

            </form>
        </div>
    </div>
</div>
<?php

if (isset($_POST['simpan'])) {
    $query = "INSERT INTO produk(nama_produk, keterangan, harga, jumlah) VALUES(
        '" . $_POST['nama_produk'] . "', '" . $_POST['keterangan'] . "', '" . $_POST['harga'] . "', '" . $_POST['jumlah'] . "'
    )";

    if (mysqli_query($conn, $query)) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        echo "terjadi kesalahan query";
    }
}

require_once 'templates/footer.php'; ?>