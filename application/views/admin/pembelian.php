<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaksi Pembelian</title>
</head>

<body>
    <div class="container mt-4">
        <?php echo form_open_multipart('admin/add_pembelian') ?>
        <form action="" method="POST" enctype="multipart/form-data">
            <div class="form-row">
                <span>Barang:</span>
                <span>User</span>
                <div class="form-group">
                    <select class="form-control" name="inventory_id" id="inventory_id">
                        <option value="" selected>--Pilih barang--</option>
                        <?php foreach ($invent as $in) { ?>
                            <option value="<?= $in['inventory_id'] ?>">
                                <?php echo $in['inventory_id'] . ' - ' . $in['nama']; ?></option>
                        <?php }; ?>
                    </select>
                </div>
                <span>Jumlah:</span>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Stok" id="stok" name="stok">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>
            </div>
        </form>
    </div>

</body>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</html>