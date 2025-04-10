<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>INVENTORY JULIANTO</title>
</head>
<body>
    <div class="container">
        <h1>data julianto</h1>

        <?php
        include '../../config/koneksi.php';
        $id_barang= $_GET['plat_nomor'];
        $query = mysqli_query($conn, "SELECT * FROM id_barang WHERE id_barang='id'");
        $result = mysqli_fetch_array($query);
        ?>

        <form action="proses_edit.php?id=<?php echo $result['id_kendaraan']; ?>" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">id barang</label>
                <input type="varchar" class="form-control" name="id barang" value="<?php echo $result['id_barang']; ?>" id="exampleInputEmail1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">nama barang</label>
                <input type="varchar" class="form-control" name="nama barang" value="<?php echo $result['nama barang']; ?>" id="exampleInputPassword1">
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">id jenis</label>
                <input type="varchar" class="form-control" name="id jenis" value="<?php echo $result['id jenis']; ?>" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">harga</label>
                <input type="varchar" class="form-control" name="harga" value="<?php echo $result['harga']; ?>" id="exampleInputPassword1">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">stok</label>
                <input type="varchar" class="form-control" name="stok" value="<?php echo $result['stok']; ?>" id="exampleInputPassword1">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
