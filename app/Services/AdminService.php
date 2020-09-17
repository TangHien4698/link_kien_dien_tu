<?php

namespace App\Services;

use App\Repositories\Contracts\UserRepositoryContract;
use App\Services\Contracts\AdminServiceContract;
use Illuminate\Support\Facades\Hash;

class AdminService implements AdminServiceContract
{
    protected $_userRepository;

    public function __construct(UserRepositoryContract $userService)
    {
        $this->_userRepository = $userService;
    }
    public function update($request, $id)
    {
        $old_password = $request->old_password;

        $admin = auth()->user();
        if (Hash::check($old_password, $admin->password)) {
            $data['password'] = Hash::make($request->password);

            return $this->_userRepository->updatePassAdmin($data, $id);
        } else {
            return false;
        }
    }
}