<?php

namespace Controller;

use Model\Gallery as GalleryModel;

class Gallery extends Init
{
    public function index()
    {
        $model = new GalleryModel();
        $data = $model->getAllImages();

        $this->renderView('gallery/index', $data);
    }

    public function update($id)
    {
        $model = new GalleryModel();

        $data = $model->getImageById($id);
        $this->renderView('gallery/update', $data);
    }
    public function create():void
    {
        $this->renderView('gallery/create');
    }

    public function delete($id):void
    {
        $model = new GalleryModel();
        $data = $model->getImageById($id);
        $this->renderView('gallery/delete', $data);
    }
}
