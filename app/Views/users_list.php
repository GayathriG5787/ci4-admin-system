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

<a class="navbar-brand" href="/dashboard">Admin Panel</a>

<div class="ms-auto">
<a href="/logout" class="btn btn-danger btn-sm">Logout</a>
</div>

</div>
</nav>

<!-- Page Content -->

<div class="container page-container">

<div class="d-flex justify-content-between align-items-center mb-3">

<h3>Users</h3>

<a href="/users/create" class="btn btn-primary">
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
</tr>
</thead>

<tbody>

<?php foreach($users as $u): ?>

<tr>
<td><?= $u->id ?></td>
<td><?= $u->name ?></td>
<td><?= $u->email ?></td>
</tr>

<?php endforeach; ?>

</tbody>

</table>

</div>

</div>

</body>
</html>
