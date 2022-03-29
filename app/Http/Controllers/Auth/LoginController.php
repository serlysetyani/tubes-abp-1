<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\Contributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;



class LoginController extends Controller
{
    public function show()
    {
        return view('auth.login');
    }

    function check(Request $request)
    {
        //Validate requests
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8'
        ]);

        $userInfo = Contributor::where('username', '=', $request->username)->first();

        if (!$userInfo) {
            return back()->with('fail', 'We do not recognize your username');
        } else {
            //check password
            if (Hash::check($request->password, $userInfo->password)) {
                $request->session()->put('LoggedUser', $userInfo->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Incorrect password');
            }
        }
    }
}
