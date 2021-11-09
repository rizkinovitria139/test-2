<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
</head>

<body>
    <div class="container mt-4">
        <h3>Inventory Tables</h3>
        <br>
        <a class="btn btn-primary" href="<?= base_url('admin/add_inventory') ?>">Tambah data</a>
        <br>
        <a class="btn btn-warning" href="<?= base_url('admin/add_pembelian') ?>">Pembelian</a>
        <br>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($inventory as $in) : ?>
                    <tr>
                        <th scope="row"><?= $i; ?></th>
                        <td><?= $in['nama']; ?></td>
                        <td><?= $in['harga']; ?></td>
                        <td><?= $in['stok']; ?></td>
                        <td>
                            <a class="btn btn-danger" href="<?= base_url('admin/delete_inventory/') . $in['inventory_id']; ?>" onclick="return confirm('Are you sure to delete this data ?');">
                                <i class="fa fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <?php $i++; ?>
            </tbody>
        </table>
    </div>
</body>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/465282327d.js" crossorigin="anonymous"></script>

</html>