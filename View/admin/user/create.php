<h5>Admin Panel</h5>
<h2>Add new user</h2>
<form action="/admin/user/create">
    <table>
        <tr>
            <td>ID</td>
            <td><input name="id"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input name="password"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input name="name"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input name="email" ></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><input name="address"></td>
        </tr>
        <tr>
            <td colspan=1><button type="submit">add post</button></td>
            <td colspan=1> <a href="/admin/user/list" style="text-decoration: none;">Cancel</a></td>
        </tr>
    </table>
</form>
