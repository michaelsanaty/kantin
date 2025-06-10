<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<div class="container">
    <h1>Daftar Menu Kantin</h1>
    <a href="<?= site_url('menu/add') ?>" class="btn btn-primary mb-3">Tambah Menu</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Nama Menu</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menu as $m): ?>
                <tr>
                    <td><?= $m['nama_menu'] ?></td>
                    <td><?= $m['harga'] ?></td>
                    <td>
                        <a href="<?= site_url('menu/edit/'.$m['id']) ?>" class="btn btn-warning btn-sm">Edit</a>
                        <a href="<?= site_url('menu/delete/'.$m['id']) ?>" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>