<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function index(Request $request)
    {
        return view('/site/login', ['error' => $request->error ?? '']);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required',
        ], [
            'email.required' => 'O campo email deve ser preenchido',
            'password.required' => 'O campo senha deve ser preenchido',
        ]);

        $user = new User();

        $autenticado = $user->where('email', $request->email)->where('password', $request->password)->first();

        if (isset($autenticado)) {
            session_start();
            $_SESSION['name'] = $autenticado->name;
            $_SESSION['email'] = $autenticado->email;

            return redirect()->route('site.index');
        } else {
            return redirect()->route('site.login', ['error' => 'true']);
        }
    }

    public function logout(){
    }
}
