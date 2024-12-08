<h5>Admin Panel</h5>
<h2>Post Page</h2>

<table>
    <tr>
        <td>ID</td>
        <td>Title</td>
        <td>Description</td>
        <td>Category name</td>
        <td>Category ID</td>
    </tr>
    <?php
    foreach ($data as $row)
    { ?>
        <tr>
            <?php if($row['id']) : ?>
                <td><?= $row['id'] ?></td>
            <?php endif; ?>
            <?php if($row['title']) : ?>
                <td><?= $row['title'] ?></td>
            <?php endif; ?>
            <?php if($row['text']) : ?>
                <td><?= $row['text'] ?></td>
            <?php endif; ?>
            <?php if($row['category']) : ?>
                <td><?= $row['category'] ?></td>
            <?php endif; ?>
            <?php if($row['category_id']) : ?>
                <td><?= $row['category_id'] ?></td>
            <?php endif; ?>
            <td><a href="/admin/post/update?id=<?= $row['id'] ?>" style="text-decoration: none;">Update</a></td>
            <td><a href="/admin/post/delete?id=<?= $row['id'] ?>" style="text-decoration: none;">Delete</a></td>
        </tr>
    <?php } ?>

</table>
<br>
<a href="/admin/post/create" style="text-decoration: none;">Add Post</a>