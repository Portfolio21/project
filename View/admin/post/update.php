<h5>Admin Panel</h5>
<h2>Update post</h2>
<form action="">
    <table>
        <tr>
            <td>ID</td>
            <td><input name="id" value="<?= $data['id'] ?>"></td>
        </tr>
        <tr>
            <td>Title</td>
            <td><input name="title" value="<?= $data['title'] ?>"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><input name="text" value="<?= $data['text'] ?>"></td>
        </tr>
        <tr>
            <td>Category name</td>
            <td><input name="category" value="<?= $data['category'] ?>"></td>
        </tr>
        <tr>
            <td>Category ID</td>
            <td><input name="category_id" value="<?= $data['category_id'] ?>"></td>
        </tr>
        <tr>
            <td colspan=1><button type="submit">Update</button></td>
            <td colspan=1> <a href="/admin/post/list" style="text-decoration: none;">Cancel</a></td>
        </tr>
    </table>
</form>
