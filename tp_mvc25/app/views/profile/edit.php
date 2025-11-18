<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="/tp_mvc25/public/assets/bootstrap.min.css">
</head>
<body class="p-4">

<h2>Edit Profile</h2>

<form method="POST">

<label>Pilih Dosen</label>
<select name="lecturer_id" class="form-control mb-2">
    <?php foreach($lecturers as $l): ?>
        <option value="<?= $l['id'] ?>" <?= $l['id'] == $profile['lecturer_id'] ? 'selected' : '' ?>>
            <?= $l['name'] ?>
        </option>
    <?php endforeach; ?>
</select>

<label>Alamat</label>
<input type="text" name="address" class="form-control mb-2" value="<?= $profile['address'] ?>">

<label>Tanggal Lahir</label>
<input type="date" name="birthdate" class="form-control mb-2" value="<?= $profile['birthdate'] ?>">

<label>Bio</label>
<textarea name="bio" class="form-control mb-2"><?= $profile['bio'] ?></textarea>

<button class="btn btn-primary">Update</button>
<a href="/tp_mvc25/public/?controller=profile&action=index" class="btn btn-secondary">Kembali</a>

</form>

<script src="/tp_mvc25/public/assets/jquery.min.js"></script>
<script src="/tp_mvc25/public/assets/popper.min.js"></script>
<script src="/tp_mvc25/public/assets/bootstrap.bundle.min.js"></script>
</body>
</html>
