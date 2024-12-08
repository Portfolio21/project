<?php

namespace Model\DataGenerator;

class PostDataGenerator
{
    public function getPosts(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Wild word',
                'text' => 'This story about wild word',
                'category' => 'animals',
                'category_id' => 11,
            ],
            [
                'id' => 2,
                'title' => 'Wild animals',
                'text' => 'This story about wild word',
                'category' => 'animals',
                'category_id' => 11,
            ],
            [
                'id' => 3,
                'title' => 'Advise for success business',
                'text' => 'This story about Advise for success business',
                'category' => 'business',
                'category_id' => 12,
            ],
            [
                'id' => 4,
                'title' => 'Creates culture',
                'text' => 'This story about creates culture',
                'category' => 'culture',
                'category_id' => 13,
            ],
            [
                'id' => 5,
                'title' => 'Global world economic problems',
                'text' => 'This story about global world economic problems',
                'category' => 'economic',
                'category_id' => 14,
            ],
        ];
    }
}
