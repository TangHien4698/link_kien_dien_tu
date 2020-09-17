<?php

namespace App\Repositories\Contracts;

interface  UserRepositoryContract
{
    public function updatePassAdmin($data, $id);

    public function getAllUser();

    public function delete($id);
}