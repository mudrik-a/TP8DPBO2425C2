<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/tp_mvc25/public/assets/bootstrap.min.css">
</head>
<body class="p-4">

<?php include __DIR__ . '/../navbar.php'; ?>

<h2>Departments</h2>
<a href="/tp_mvc25/public/?controller=department&action=create" class="btn btn-primary mb-3">Tambah Dept</a>

<table class="table table-bordered table-striped">
<tr>
    <th>ID</th><th>Nama</th><th>Deskripsi</th><th>Aksi</th>
</tr>

<?php foreach($departments as $d): ?>
<tr>
    <td><?= $d['id'] ?></td>
    <td><?= $d['name'] ?></td>
    <td><?= $d['description'] ?></td>
    <td>
        <a class="btn btn-warning btn-sm" href="/tp_mvc25/public/?controller=department&action=edit&id=<?= $d['id'] ?>">Edit</a>
        <a class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')" href="/tp_mvc25/public/?controller=department&action=delete&id=<?= $d['id'] ?>">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

<script src="/tp_mvc25/public/assets/jquery.min.js"></script>
<script src="/tp_mvc25/public/assets/popper.min.js"></script>
<script src="/tp_mvc25/public/assets/bootstrap.bundle.min.js"></script>
</body>
</html>
