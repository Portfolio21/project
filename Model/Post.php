<?php

namespace Model;

use Database\Insert;
use Model\DataGenerator\PostDataGenerator;

class Post
{
    private const FIELDS = ['id', 'name', 'image_url', 'category', 'category_id'];
    private const TABLE_NAME = 'post';

    public function getAllPosts(): array
    {
        $dataGenerator = new PostDataGenerator();

        return $dataGenerator->getPosts();
    }

    public function getPostById(int $id)
    {
        $dataGenerator = new PostDataGenerator();

        foreach ($dataGenerator->getPosts() as $post) {
            if ($post['id'] === $id) {
                return $post;
            }
        }
    }

    public function save($values)
    {
        $insert = new Insert();
        $query = $insert->build($values, self::TABLE_NAME, self::FIELDS);
        $insert->execute($query);
    }
}
