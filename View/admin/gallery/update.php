<h2>Update image</h2>
<form action="">
    <table>
        <tr>
            <td>ID</td>
            <td><input name="id"  value="<?= $data['id'] ?>"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input name="name"  value="<?= $data['name'] ?>"></td>
        </tr>
        <tr>
            <td>Image Url</td>
            <td><input name="image_url"  value="<?= $data['image_url'] ?>"></td>
        </tr>
        <tr>
            <td>Category</td>
            <td><input name="category"  value="<?= $data['category'] ?>"></td>
        </tr>
        <tr>
            <td>Category ID</td>
            <td><input name="category_id"  value="<?= $data['category_id'] ?>"></td>
        </tr>
        <tr>
            <td colspan=1><button type="submit">Update</button></td>
            <td colspan=1> <a href="/admin/gallery/list" style="text-decoration: none;">Cancel</a></td>
        </tr>
    </table>
</form>
