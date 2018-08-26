<?php

namespace App\Http\Controllers\Auth_Admin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Model\Admin;
use Auth;

class AdminLoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Admin Controller
    |--------------------------------------------------------------------------
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/painel';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth_admin.admin');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = ([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $status = Auth::guard('admin')->attempt($credentials,$request->remember);
        
        if (!$status) {
            return redirect()->back()->withInput($request->all())->with('Usuário ou senha incorreto.');
        }

        return redirect()->intended(route('painel.dashboard'));

    }
}
