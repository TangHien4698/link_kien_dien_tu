<?php


namespace App\Services\Contracts;


interface ProductServiceContract
{
    public function getAll();

    public function create($request);

    public function getById($id);

    public function update($id, $request);

    public function delete($id);
}
