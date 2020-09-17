<?php
namespace App\Repositories;

use App\Repositories\Contracts\UserRepositoryContract;
use App\User;
use Illuminate\Support\Facades\DB;

class UserRepository implements UserRepositoryContract
{
    protected $_model;

    public function __construct(User $user)
    {
        $this->_model = $user;
    }

    public function updatePassAdmin($data, $id)
    {
        return $this->_model->where('id', $id)->update($data);
    }

    public function getAllUser()
    {
        $roleAdmin = config('admin.role.admin');
        return $this->_model->whereNotIn('role', [$roleAdmin])->get();
    }

    public function delete($id)
    {
        return $this->_model->where('id', $id)->delete();
    }
}