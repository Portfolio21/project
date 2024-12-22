<h5>Admin Panel</h5>
<h2>User Page</h2>

<table>
    <tr>
        <td>ID</td>
        <td>Password</td>
        <td>Name</td>
        <td>Email</td>
        <td>Address</td>
    </tr>
    <?php
    foreach ($data as $row)
    { ?>
        <tr>
            <?php if($row['id']) : ?>
                <td><?= $row['id'] ?></td>
            <?php endif; ?>
            <?php if($row['password']) : ?>
                <td><?= $row['password'] ?></td>
            <?php endif; ?>
            <?php if($row['name']) : ?>
                <td><?= $row['name'] ?></td>
            <?php endif; ?>
            <?php if($row['email']) : ?>
                <td><?= $row['email'] ?></td>
            <?php endif; ?>
            <?php if($row['address']) : ?>
                <td><?= $row['address'] ?></td>
            <?php endif; ?>
            <td><a href="/admin/user/update?id=<?= $row['id'] ?>" style="text-decoration: none;">Update</a></td>
            <td><a href="/admin/user/delete?id=<?= $row['id'] ?>" style="text-decoration: none;">Delete</a></td>
        </tr>
    <?php } ?>

</table>
<br>
<a href="/admin/user/create" style="text-decoration: none;">Add User</a>
