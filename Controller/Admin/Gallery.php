<?php

namespace Controller\Admin;

use Controller\Init;
use Model\Gallery as GalleryModel;

class Gallery extends Init
{
    public function index()
    {
        $model = new GalleryModel();
        $data = $model->getAllImages();

        $this->renderView('admin/gallery/index', $data);
    }

    public function update($id)
    {
        $model = new GalleryModel();

        $data = $model->getImageById($id);
        $this->renderView('admin/gallery/update', $data);
    }
    public function create($id = null, $name = null, $image_url = null, $category = null, $category_id = null): void
    {
        if ($id !== null) {
            $user = new GalleryModel();
            $user->save([$id, $name, $image_url, $category, $category_id]);
        }

        $this->renderView('admin/gallery/create');
    }

    public function delete($id):void
    {
        $model = new GalleryModel();
        $data = $model->getImageById($id);
        $this->renderView('admin/gallery/delete', $data);
    }
}
