<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Users</title>

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

.table th{
background:#343a40;
color:white;
}

</style>

</head>
<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="<?= base_url('dashboard') ?>">Admin Panel</a>

<div class="ms-auto">
<a href="<?= base_url('logout') ?>" class="btn btn-danger btn-sm">Logout</a>
</div>

</div>
</nav>

<!-- Page Content -->

<div class="container page-container">

<div class="d-flex justify-content-between align-items-center mb-3">

<h3>Users</h3>

<a href= <?= base_url('users/create') ?> class="btn btn-primary">
Add User
</a>

</div>

<div class="card p-4">

<table class="table table-striped table-hover">

<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<?php foreach($users as $u): ?>

<tr>
<td><?= $u['id'] ?></td>
<td><?= $u['name'] ?></td>
<td><?= $u['email'] ?></td>

<td>

<a href="<?= base_url('users/edit/'.$u['id']) ?>" class="btn btn-warning btn-sm">
Edit
</a>

<a href="<?= base_url('users/delete/'.$u['id']) ?>" 
class="btn btn-danger btn-sm"
onclick="return confirm('Are you sure you want to delete this user?')">
Delete
</a>

</td>

</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</div>

</body>
</html>
