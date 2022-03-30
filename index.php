<?php require_once 'templates/header.php'; 
    
if (isset($_GET['hapus'])) {
    if ($_GET['id']) {
        $query = "DELETE FROM produk WHERE id = " . $_GET['id'];
        if (mysqli_query($conn, $query)) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
        }
    }
}

?>

<div class="container mt-2">
    <div class="row">
        <div class="col-sm-9">
            <h2><i class="fa fa-building"></i> All produk</h2>
        </div>
        <div class="col-sm-3">
            <a href="tambah.php" class="btn btn-sm btn-primary text-white" style="float: right;">
                <i class="fa fa-plus"></i> 
                Tambah produk</a>
        </div>
        <div class="col-sm-12">
            
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Keterangan</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $produks = mysqli_query($conn, "SELECT * FROM produk");
                    while ($produk = mysqli_fetch_object($produks)) {
                    ?>
                        <tr>
                            <td><?= $produk->id; ?></td>
                            <td><?= $produk->nama_produk; ?></td>
                            <td><?= $produk->keterangan; ?></td>
                            <td><?= $produk->harga; ?></td>
                            <td><?= $produk->jumlah; ?></td>
                            <td>
                                <a class="btn btn-sm btn-warning text-white" href="edit.php?id=<?= $produk->id; ?>"><i class="fa fa-edit"></i></a>
                                <a class="btn btn-sm btn-info text-white" href="show.php?id=<?= $produk->id; ?>"><i class="fa fa-eye"></i></a>
                                <a class="btn btn-sm btn-danger text-white" href="?hapus&id=<?= $produk->id; ?>"><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php

require_once 'templates/footer.php'; ?>