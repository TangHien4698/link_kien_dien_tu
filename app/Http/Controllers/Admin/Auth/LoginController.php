<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use Session;
class LoginController extends Controller
{
    use AuthenticatesUsers;

    public function index()
    {

        if (auth::check()) {
            return redirect()->route('admin.index');
        }
        return view('admin.login');
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('checkAdmin')->except('logout');
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);
        if ($this->attemptLogin($request)) {
            if (isAdmin()) {

                return redirect()->route('admin.index')
                    ->with('status', __('messages.13'));
            } else {

                return redirect()->route('home')
                    ->with('status', __('messages.13'));
            }
        }
        //Authentication failed...
        return $this->loginFailed();
    }

    private function loginFailed()
    {
        return redirect()
            ->back()
            ->withInput()
            ->with('error', __('Login Fail'));
    }

    /**
     * Get the login username to be used by the controller.
     *
     * @return string
     */
    public function username()
    {
        return 'username';
    }

    /**
     * Validate the user login request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    protected function validateLogin(Request $request)
    {
        $request->validate([
            $this->username() => 'required|between:3,32',
            'password' => 'required',
        ],
        ['username.required' => __('validate-form.required'),
            'username.between' => __('validate-form.between'),
            'password.required' => __('validate-form.required'),
        ]);
    }

    public function logout()
    {
        if (Auth::logout()) {
            Session::flush();
            if (isAdmin()) {
                return redirect()->route('login.index');
            }
            if (isUser()) {
                return redirect()->route('user.login');// router cua user chua login (home)
            }
        }
        if (isAdmin()) {
            return redirect()->route('admin.index');
        } else {
            return redirect()->route('home');//router cua user da login
        }
    }
}
