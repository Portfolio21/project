<?php

namespace Model;

use Database\Insert;
use Model\DataGenerator\GalleryDataGenerator;

class Gallery
{
    private const FIELDS = ['id', 'name', 'image_url', 'category', 'category_id'];
    private const TABLE_NAME = 'gallery';

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

    public function save($values)
    {
        $insert = new Insert();
        $query = $insert->build($values, self::TABLE_NAME, self::FIELDS);
        $insert->execute($query);
    }
}