<?php

namespace App\Services;

use App\Services\Contracts\UserServiceContract;
use App\Repositories\Contracts\UserRepositoryContract;
class UserService implements UserServiceContract
{
    protected $_userRepository;

    public function __construct(UserRepositoryContract $userRepository)
    {
        $this->_userRepository = $userRepository;
    }

    public function getAllUser()
    {
        return $this->_userRepository->getAllUser();
    }

    public function delete($id)
    {
        return $this->_userRepository->delete($id);
    }
}