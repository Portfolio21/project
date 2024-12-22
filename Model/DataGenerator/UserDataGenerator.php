<?php

namespace Model\DataGenerator;

class UserDataGenerator
{
    public function getUsers(): array
    {
        return [
            [
                'id' => 11,
                'password' => 'test1',
                'name' => 'test1',
                'email' => 'test1@test.com',
                'address' => 'test city1',
            ],
            [
                'id' => 12,
                'password' => 'test2',
                'name' => 'test2',
                'email' => 'test2@test.com',
                'address' => 'test city2',
            ],
            [
                'id' => 13,
                'password' => 'test3',
                'name' => 'test3',
                'email' => 'test3@test.com',
                'address' => 'test city3',
            ],
            [
                'id' => 14,
                'password' => 'test4',
                'name' => 'test4',
                'email' => 'test4@test.com',
                'address' => 'test city4',
            ],
            [
                'id' => 15,
                'password' => 'test5',
                'name' => 'test5',
                'email' => 'test5@test.com',
                'address' => 'test city5',
            ],
        ];
    }
}
