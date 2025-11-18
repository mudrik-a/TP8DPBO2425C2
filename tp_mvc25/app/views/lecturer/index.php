<!DOCTYPE html>
<html>
<head>
    <title>Daftar Dosen</title>
    <link rel="stylesheet" href="/tp_mvc25/public/assets/bootstrap.min.css">
</head>
<body class="p-4">

<?php include __DIR__ . '/../navbar.php'; ?>

<h2>Daftar Dosen</h2>

<a href="/tp_mvc25/public/?controller=lecturer&action=create" class="btn btn-primary mb-3">Tambah Dosen</a>

<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>NIDN</th>
            <th>Telepon</th>
            <th>Join Date</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($lecturers as $l): ?>
        <tr>
            <td><?= $l['id'] ?></td>
            <td><?= $l['name'] ?></td>
            <td><?= $l['nidn'] ?></td>
            <td><?= $l['phone'] ?></td>
            <td><?= $l['join_date'] ?></td>
            <td>
                <a href="/tp_mvc25/public/?controller=lecturer&action=edit&id=<?= $l['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a onclick="return confirm('Hapus data?')" href="/tp_mvc25/public/?controller=lecturer&action=delete&id=<?= $l['id'] ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<script src="/tp_mvc25/public/assets/jquery.min.js"></script>
<script src="/tp_mvc25/public/assets/popper.min.js"></script>
<script src="/tp_mvc25/public/assets/bootstrap.bundle.min.js"></script>
<script src="/tp_mvc25/public/assets/bootstrap.min.js"></script>
<script src="/tp_mvc25/public/assets/bootstrap.min.css"></script>


</body>
</html>
