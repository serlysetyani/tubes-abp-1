<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfilRequest;
use App\Models\Contributor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */



    public function index()
    {
        return view('admin.dashboard');
    }

    public function profil()
    {
        $data = ['LoggedUserInfo' => Contributor::where('id', '=', session('LoggedUser'))->first()];
        return view('admin.profil', $data);
    }

    public function updateProfil(ProfilRequest $request, $id)
    {
        $data = $request->all();

        if ($request->password != "") {
            $data['password'] = Hash::make($request->password);
        }

        if ($request->file('avatar')  != "") {
            $data['avatar'] = $request->file('avatar')->store(
                'assets/profil',
                'public'
            );
        }
        $profil = Contributor::findOrFail($id);
        $profil->update($data);

        if ($profil) {
            return back()->with('success', 'Update User has been successfuly  to database');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
