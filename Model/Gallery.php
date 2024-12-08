<?php

namespace Model;

use Model\DataGenerator\GalleryDataGenerator;

class Gallery
{
    public function getAllImages(): array
    {
        $dataGenerator = new GalleryDataGenerator();

        return $dataGenerator->geImages();
    }

    public function getImageById($id)
    {
        $dataGenerator = new GalleryDataGenerator();

        foreach ($dataGenerator->geImages() as $image) {
            if ($image['id'] == $id) {
                return $image;
            }
        }
    }
}