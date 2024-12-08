<?php

namespace Model;

use Model\DataGenerator\PostDataGenerator;

class Post
{
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
}
