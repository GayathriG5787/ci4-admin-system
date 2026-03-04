<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add User</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f6f9;
font-family:Arial, Helvetica, sans-serif;
}

.navbar{
box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

.page-container{
margin-top:50px;
}

.card{
border:none;
border-radius:10px;
box-shadow:0 4px 15px rgba(0,0,0,0.08);
}

.form-label{
font-weight:500;
}

</style>

</head>
<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href=<?= base_url('dashboard') ?>>Admin Panel</a>

<div class="ms-auto">
<a href="<?= base_url('logout') ?>" class="btn btn-danger btn-sm">Logout</a>
</div>

</div>
</nav>


<!-- Page Content -->

<div class="container page-container">

<div class="mb-4">
<h3>Add User</h3>
</div>

<div class="card p-4">

<form method="post" action=<?= base_url('users/store') ?>>

<div class="mb-3">
<label class="form-label">Name</label>
<input type="text" name="name" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<div class="mt-3">

<button type="submit" class="btn btn-success">
Save User
</button>

<a href="<?= base_url('users') ?>" class="btn btn-secondary">
Cancel
</a>

</div>

</form>

</div>

</div>

</body>
</html>