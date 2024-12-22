<?php

namespace Controller\Admin;

use Controller\Init;
use Model\User as User;

class Users extends Init
{
    public function index()
    {
        $model = new User();
        $data = $model->getAllUsers();
        $this->renderView('admin/user/index', $data);
    }

    public function update($id)
    {
        $model = new User();
        $data = $model->getUserById($id);
        $this->renderView('admin/user/update', $data);
    }

    public function create($id = null, $password = null, $name = null, $email = null, $address = null): void
    {
        if ($id !== null) {
            $user = new User();
            $user->save([$id, $password, $name, $email, $address]);
        }

        $this->renderView('admin/user/create');
    }

    public function delete($id)
    {
        $model = new User();
        $data = $model->getUserById($id);
        $this->renderView('admin/user/delete', $data);
    }

}
