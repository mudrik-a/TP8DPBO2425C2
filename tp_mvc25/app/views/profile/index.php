<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/tp_mvc25/public/assets/bootstrap.min.css">
</head>
<body class="p-4">

<?php include __DIR__ . '/../navbar.php'; ?>

<h2>Profiles</h2>
<a href="/tp_mvc25/public/?controller=profile&action=create" class="btn btn-primary mb-3">Tambah Profile</a>

<table class="table table-bordered">
<tr>
    <th>ID</th>
    <th>Dosen</th>
    <th>Alamat</th>
    <th>Lahir</th>
    <th>Bio</th>
    <th>Aksi</th>
</tr>

<?php foreach($profiles as $p): ?>
<tr>
    <td><?= $p['id'] ?></td>
    <td><?= $p['lecturer_name'] ?></td>
    <td><?= $p['address'] ?></td>
    <td><?= $p['birthdate'] ?></td>
    <td><?= $p['bio'] ?></td>
    <td>
        <a class="btn btn-warning btn-sm" href="/tp_mvc25/public/?controller=profile&action=edit&id=<?= $p['id'] ?>">Edit</a>
        <a class="btn btn-danger btn-sm" onclick="return confirm('Hapus?')" href="/tp_mvc25/public/?controller=profile&action=delete&id=<?= $p['id'] ?>">Hapus</a>
    </td>
</tr>
<?php endforeach; ?>
</table>

<script src="/tp_mvc25/public/assets/jquery.min.js"></script>
<script src="/tp_mvc25/public/assets/popper.min.js"></script>
<script src="/tp_mvc25/public/assets/bootstrap.bundle.min.js"></script>
</body>
</html>
