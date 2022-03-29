<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use App\Models\Contributor;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{

    public function show()
    {
        return view('auth.register');
    }

    public function save(RegisterRequest $request)
    {
        $user = new Contributor;
        $user->username = $request->username;
        $user->password = Hash::make($request->password);
        $save = $user->save();

        if ($save) {
            return back()->with('success', 'New User has been successfuly added to database');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }
}
