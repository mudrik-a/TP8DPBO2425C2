<!DOCTYPE html>
<html>
<head>
    <title>Edit Dosen</title>
    <link rel="stylesheet" href="/tp_mvc25/public/assets/bootstrap.min.css">
</head>
<body class="p-4">

<h2>Edit Dosen</h2>

<form method="POST">
    <label>Nama</label>
    <input type="text" name="name" value="<?= $lecturer['name'] ?>" class="form-control mb-2" required>

    <label>NIDN</label>
    <input type="text" name="nidn" value="<?= $lecturer['nidn'] ?>" class="form-control mb-2" required>

    <label>Telepon</label>
    <input type="text" name="phone" value="<?= $lecturer['phone'] ?>" class="form-control mb-2" required>

    <label>Join Date</label>
    <input type="date" name="join_date" value="<?= $lecturer['join_date'] ?>" class="form-control mb-2" required>

    <button class="btn btn-primary">Update</button>
    <a href="/tp_mvc25/public/?controller=lecturer&action=index" class="btn btn-secondary">Kembali</a>
</form>

<script src="/tp_mvc25/public/assets/jquery.min.js"></script>
<script src="/tp_mvc25/public/assets/popper.min.js"></script>
<script src="/tp_mvc25/public/assets/bootstrap.bundle.min.js"></script>
</body>
</html>
