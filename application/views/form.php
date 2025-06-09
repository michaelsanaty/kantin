<!DOCTYPE html>
<html>
<head>
    <title>Data Menu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body class="container mt-5">
    <h2>Data Menu Kantin</h2>
    <a href="<?= base_url('menu/tambah') ?>" class="btn btn-success mb-3">Tambah Menu</a>
    <table class="table table-bordered">
        <tr>
            <th>Nama</th><th>Kategori</th><th>Harga</th><th>Stok</th><th>Aksi</th>
        </tr>
        <?php foreach ($menu as $m): ?>
        <tr>
            <td><?= $m->nama_menu ?></td>
            <td><?= $m->kategori ?></td>
            <td><?= $m->harga ?></td>
            <td><?= $m->stok ?></td>
            <td>
                <a href="<?= base_url('menu/edit/'.$m->id_menu) ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= base_url('menu/hapus/'.$m->id_menu) ?>" onclick="return confirm('Hapus data?')" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php endforeach ?>
    </table>
</body>
</html>