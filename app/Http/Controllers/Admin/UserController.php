<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\Contracts\UserServiceContract;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $_userService;
    protected $model;

    public function __construct(UserServiceContract $userService, User $user)
    {
        $this->_userService = $userService;
        $this->model = $user;
    }

    public function index()
    {
        $roleAdmin = config('admin.role.admin');
        $users = $this->model->whereNotIn('role', [$roleAdmin])->get();
        return view('admin.users.index', ['users' => $users]);
    }

    public function delete(Request $request)
    {
        $result = false;
        $id = $request->id;
        $user = $this->model->where('id', $id)->delete($id);
        if ($user) {
            $result = true;
        }

        return response()->json([
            'result' => $result
        ]);
    }
}
