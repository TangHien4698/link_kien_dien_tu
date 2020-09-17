<?php


namespace App\Services\Contracts;


interface CategoryServiceContract
{
    public function getAll();

    public function create($data);

    public function update($id, $newData);

    public function delete($id);
}
