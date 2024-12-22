<?php

namespace Controller\Admin;

use Database\Insert;
use Model\Post;
use Controller\Init;

class Posts extends Init
{
    private const FIELDS = ['id', 'title', 'text', 'category', 'category_id'];
    private const TABLE_NAME = 'posts';

    public function index()
    {
        $model = new Post();
        $data = $model->getAllPosts();
        $this->renderView('admin/post/index', $data);
    }

    public function update($id)
    {
        $model = new Post();
        $data = $model->getPostById($id);
        $this->renderView('admin/post/update', $data);
    }

    public function create($id = null, $title = null, $description = null, $category_name = null, $category_id = null): void
    {
        if ($id !== null) {
            $user = new Post();
            $user->save([$id, $title, $description, $category_name, $category_id]);
        }

        $this->renderView('admin/post/create');
    }

    public function delete($id)
    {
        $model = new Post();
        $data = $model->getPostById($id);
        $this->renderView('admin/post/delete', $data);
    }
}
