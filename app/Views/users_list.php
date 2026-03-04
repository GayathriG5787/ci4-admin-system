<h2>Users</h2>

<a href="/users/create">Add User</a>

<table border="1">

<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>

<?php foreach($users as $u): ?>

<tr>
<td><?= $u->id ?></td>
<td><?= $u->name ?></td>
<td><?= $u->email ?></td>
</tr>

<?php endforeach; ?>

</table>