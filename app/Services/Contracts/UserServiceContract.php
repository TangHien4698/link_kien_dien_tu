<?php 
namespace App\Services\Contracts;

interface UserServiceContract
{
    public function getAllUser();

    public function delete($id);
}