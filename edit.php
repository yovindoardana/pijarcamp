<?php require_once 'templates/header.php';

$produks = mysqli_query($conn, "SELECT * FROM produk WHERE id = " . $_GET['id']);
$produk = mysqli_fetch_object($produks);

?>
<div class="container mt-2">
    <div class="row">
        <div class="col-sm-9">
            <h2><i class="fa fa-edit"></i> Edit Produk </h2>
        </div>
        <div class="col-sm-3">
            <a href="index.php" class="btn btn-secondary text-white btn-sm btn-outline-secondary" style="float: right;"><i class="fa fa-arrow-left"> </i> Kembali </a>
        </div>
        <div class="col-sm-12">
            <form action="" method="post">
                <input type="hidden" name="id" value="<?= $produk->id; ?>">
                <div class="mb-3 mt-3">
                    <label for="nama" class="form-label">Nama :</label>
                    <input type="text" class="form-control" id="name" placeholder="Enter name" name="nama_produk" value="<?= $produk->nama_produk; ?>">
                </div>
                <div class="mb-3 mt-3">
                    <label for="keterangan" class="form-label">Keterangan :</label>
                    <input type="text" class="form-control" id="keterangan" placeholder="Enter keterangan" name="keterangan" value="<?= $produk->keterangan; ?>">
                </div>
                <div class="mb-3 mt-3">
                    <label for="harga" class="form-label">Harga :</label>
                    <input type="text" class="form-control" id="harga" placeholder="Enter harga" name="harga" value="<?= $produk->harga; ?>">
                </div>
                <div class="mb-3 mt-3">
                    <label for="jumlah" class="form-label">jumlah :</label>
                    <input type="text" class="form-control" id="jumlah" placeholder="Enter jumlah" name="jumlah" value="<?= $produk->jumlah; ?>">
                </div>

                <button type="submit" class="btn btn-primary" name="simpan"><i class="fa fa-save"></i> Simpan</button>

            </form>
        </div>
    </div>
</div>

<?php

if (isset($_POST['simpan'])) {
    $query = "UPDATE produk SET
        nama_produk = '" . $_POST['nama_produk'] . "'
        , keterangan = '" . $_POST['keterangan'] . "'
        , harga = '" . $_POST['harga'] . "'
        , jumlah = '" . $_POST['jumlah'] . "'
        WHERE id = " . $_POST['id'];

    if (mysqli_query($conn, $query)) {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    } else {
        echo "terjadi kesalahan query";
    }
}

require_once 'templates/footer.php'; ?>