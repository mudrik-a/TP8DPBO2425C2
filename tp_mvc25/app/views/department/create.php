<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/tp_mvc25/public/assets/bootstrap.min.css">
</head>
<body class="p-4">

<h2>Tambah Department</h2>

<form method="POST">
    <label>Nama</label>
    <input type="text" name="name" class="form-control mb-2">

    <label>Deskripsi</label>
    <textarea name="description" class="form-control mb-2"></textarea>

    <button class="btn btn-success">Simpan</button>
    <a href="/tp_mvc25/public/?controller=department&action=index" class="btn btn-secondary">Kembali</a>
</form>

<script src="/tp_mvc25/public/assets/jquery.min.js"></script>
<script src="/tp_mvc25/public/assets/popper.min.js"></script>
<script src="/tp_mvc25/public/assets/bootstrap.bundle.min.js"></script>
</body>
</html>