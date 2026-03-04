<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background:#f4f6f9;
font-family:Arial, Helvetica, sans-serif;
}

.navbar{
box-shadow:0 2px 8px rgba(0,0,0,0.1);
}

.dashboard-container{
margin-top:60px;
}

.card{
border:none;
border-radius:10px;
box-shadow:0 4px 15px rgba(0,0,0,0.08);
transition:0.3s;
}

.card:hover{
transform:translateY(-5px);
}

.card-title{
font-weight:600;
}

</style>

</head>
<body>

<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container">

<a class="navbar-brand" href="#">Admin Panel</a>

<div class="ms-auto">
<a href="<?= base_url('logout') ?>" class="btn btn-danger btn-sm">Logout</a>
</div>

</div>
</nav>

<!-- Dashboard Content -->

<div class="container dashboard-container">

<h3 class="mb-4">Dashboard</h3>

<div class="row">

<div class="col-md-4">

<div class="card p-4">

<h5 class="card-title">Manage Users</h5>

<p class="text-muted">
Add, view and manage users in the system.
</p>

<a href="<?= base_url('users') ?>" class="btn btn-primary">
Go to Users
</a>

</div>

</div>

</div>

</div>

</body>
</html>
