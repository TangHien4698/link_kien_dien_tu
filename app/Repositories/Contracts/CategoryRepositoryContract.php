<?php

namespace App\Repositories\Contracts;


interface CategoryRepositoryContract
{
    public function getAll();

    public function create($data);

    public function update($id, $data);

    public function delete($id);
}
