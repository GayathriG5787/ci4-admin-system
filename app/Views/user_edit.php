<!DOCTYPE html>
<html>
<head>

<title>Edit User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h3>Edit User</h3>

<form method="post" action="<?= base_url('users/update/'.$user['id']) ?>">

<div class="mb-3">
<label>Name</label>
<input type="text" name="name" value="<?= $user['name'] ?>" class="form-control">
</div>

<div class="mb-3">
<label>Email</label>
<input type="email" name="email" value="<?= $user['email'] ?>" class="form-control">
</div>

<button class="btn btn-success">Update</button>

<a href="<?= base_url('users') ?>" class="btn btn-secondary">Cancel</a>

</form>

</div>

</body>
</html>