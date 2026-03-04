<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="UTF-8">
<title>Admin Login</title>

<!-- Bootstrap CSS -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
background: linear-gradient(135deg,#0f2027,#203a43,#2c5364);
height:100vh;
display:flex;
align-items:center;
justify-content:center;
font-family: Arial, Helvetica, sans-serif;
}

.login-card{
width:400px;
padding:35px;
border-radius:12px;
box-shadow:0 10px 30px rgba(0,0,0,0.3);
background:white;
}

.login-title{
text-align:center;
margin-bottom:25px;
font-weight:600;
}

.btn-login{
width:100%;
}

</style>

</head>
<body>

<div class="login-card">

<h3 class="login-title">Admin Login</h3>

<form method="post" action="<?= base_url('admin/loginAuth') ?>">

<div class="mb-3">
<label class="form-label">Email</label>
<input type="email" name="email" class="form-control" required>
</div>

<div class="mb-3">
<label class="form-label">Password</label>
<input type="password" name="password" class="form-control" required>
</div>

<div class="d-grid">
<button type="submit" class="btn btn-primary btn-login">
Login
</button>
</div>

</form>

</div>

</body>
</html>
