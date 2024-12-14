<?php

namespace Controller\Admin;

use Model\Post;
use Controller\Init;

class Posts extends Init
{
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

    public function create(): void
    {
        $this->renderView('admin/post/create');
    }

    public function delete($id)
    {
        $model = new Post();
        $data = $model->getPostById($id);
        $this->renderView('admin/post/delete', $data);
    }
}
