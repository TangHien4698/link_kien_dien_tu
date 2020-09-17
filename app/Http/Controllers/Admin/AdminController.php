<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdatePasswordRequest;
use App\Services\Contracts\AdminServiceContract;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    protected $_adminService;
    protected $model;

    public function __construct(AdminServiceContract $adminService, User $user)
    {
        $this->_adminService = $adminService;
        $this->model = $user;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.home');
    }

    public function changePass()
    {
        $admin = auth()->user();
        return view ('admin.changePass', ['admin' => $admin]);
    }

    public function updatePass(UpdatePasswordRequest $request, $id)
    {
        $result = false;
        $old_password = $request->old_password;
        $admin = auth()->user();
        if (Hash::check($old_password, $admin->password)) {
            $data['password'] = Hash::make($request->password);
            $res = $this->model->where('id', $id)->update($data);
            if ($res > 0) {
                flashMessage($request, __('messages.editSuccess'), 'alert-success');
                return redirect()->route('admin.logout');
            }
        }
        flashMessage($request, __('messages.editFail'), 'alert-danger');
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd(Auth::user()->username);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
