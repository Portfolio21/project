<h5>Admin Panel</h5>
<h2>Update user</h2>
<form action="">
    <table>
        <tr>
            <td>ID</td>
            <td><input name="id" value="<?= $data['id'] ?>"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input name="password" value="<?= $data['password'] ?>"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input name="name" value="<?= $data['name'] ?>"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input name="email" value="<?= $data['email'] ?>"></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input name="address" value="<?= $data['address'] ?>"></td>
        </tr>
        <tr>
            <td colspan=1><button type="submit">Update</button></td>
            <td colspan=1> <a href="/admin/user/list" style="text-decoration: none;">Cancel</a></td>
        </tr>
    </table>
</form>
