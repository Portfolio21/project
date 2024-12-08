<h2>Gallery Page</h2>

<table>
    <tr>
        <td>ID</td>
        <td>Name</td>
        <td>Image Url</td>
        <td>Category</td>
        <td>Category ID</td>
    </tr>
    <?php
    foreach ($data as $row)
    { ?>
        <tr>
            <?php if($row['id']) : ?>
                <td><?= $row['id'] ?></td>
            <?php endif; ?>
            <?php if($row['name']) : ?>
                <td><?= $row['name'] ?></td>
            <?php endif; ?>
            <?php if($row['image_url']) : ?>
                <td><?= $row['image_url'] ?></td>
            <?php endif; ?>
            <?php if($row['category']) : ?>
                <td><?= $row['category'] ?></td>
            <?php endif; ?>
            <?php if($row['category_id']) : ?>
                <td><?= $row['category_id'] ?></td>
            <?php endif; ?>
            <td><a href="/gallery/update?id=<?= $row['id'] ?>" style="text-decoration: none;">Update</a></td>
            <td><a href="/gallery/delete?id=<?= $row['id'] ?>" style="text-decoration: none;">Delete</a></td>
        </tr>
    <?php } ?>

</table>
<br>
    <a href="/gallery/create" style="text-decoration: none;">Add Image</a>