<?php require_once 'templates/header.php';

$produk = mysqli_query($conn, "SELECT * FROM produk WHERE id = " . $_GET['id']);
$produk = mysqli_fetch_object($produk);

?>

<div class="container mt-2">
    <div class="row">
        <div class="col-sm-9">
            <h2><i class="fa fa-building"></i> Detail produk</h2>
        </div>
        <div class="col-sm-3">
            <a href="index.php" class="btn btn-secondary text-white btn-sm btn-outline-secondary" style="float: right;"><i class="fa fa-arrow-left"></i> Kembali </a>
        </div>
        <div class="col-sm-12">
            
            <div class="card" >
                <table class="table table-striped mb-0">
                    <tr>
                        <td width="20%">ID</td>
                        <td>: <?= $produk->id ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>: <?= $produk->nama_produk ?></td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>: <?= $produk->keterangan ?></td>
                    </tr>
                    <tr>
                        <td>Harga</td>
                        <td>: <?= $produk->harga ?></td>
                    </tr>
                    <tr>
                        <td>Jumlah</td>
                        <td>: <?= $produk->jumlah ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>


<?php require_once 'templates/footer.php'; ?>