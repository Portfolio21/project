<?php

namespace Model\DataGenerator;

class GalleryDataGenerator
{
    public function geImages(): array
    {
        return [
            [
                'id' => 11,
                'name' => 'Game shooter',
                'image_url' => 'shooter.png',
                'category' => 'game',
                'category_id' => 33,
            ],
            [
                'id' => 12,
                'name' => 'amazing ocean',
                'image_url' => 'amazing-ocean.png',
                'category' => 'traveling',
                'category_id' => 34,
            ],
            [
                'id' => 13,
                'name' => 'crazy speed',
                'image_url' => 'crazy-speed.png',
                'category' => 'car',
                'category_id' => 35,
            ],
            [
                'id' => 14,
                'name' => 'space',
                'image_url' => 'space.png',
                'category' => 'space',
                'category_id' => 37,
            ],
            [
                'id' => 15,
                'name' => 'forgotten creators',
                'image_url' => 'forgotten-creators.png',
                'category' => 'morphology',
                'category_id' => 39,
            ],
        ];
    }

    public function geImagesValues(): array
    {
        return [
            [
                 11,
                'Game shooter',
                'shooter.png',
                'game',
                33,
            ],
            [
                12,
                'amazing ocean',
                'amazing-ocean.png',
                'traveling',
                34,
            ],
            [
                13,
                'crazy speed',
                'crazy-speed.png',
                'car',
                35,
            ],
            [
                14,
                'space',
                'space.png',
                'space',
                37,
            ],
            [
                15,
                'forgotten creators',
                'forgotten-creators.png',
                'morphology',
                39,
            ],
        ];
    }
}