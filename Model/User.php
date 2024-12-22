<?php

namespace Model;

use Database\Insert;
use Model\DataGenerator\UserDataGenerator;

class User
{
    private const FIELDS = ['id', 'password', 'name', 'email', 'address'];
    private const TABLE_NAME = 'users';

    public function getAllUsers(): array
    {
        $dataGenerator = new UserDataGenerator();

        return $dataGenerator->getUsers();
    }

    public function getUserById(int $id)
    {
        $dataGenerator = new UserDataGenerator();

        foreach ($dataGenerator->getUsers() as $user) {
            if ($user['id'] === $id) {
                return $user;
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
