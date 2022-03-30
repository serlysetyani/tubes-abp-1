<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Http\Requests\ProfilRequest;
use App\Models\Contributor;
use App\Models\Article;
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
        $data = Article::where('user_id', '=', session('LoggedUser'))->paginate(5);
        $jumlah = Article::where('user_id', '=', session('LoggedUser'));
        return view('admin.dashboard')->with([
            'data' => $data,
            'jumlah' => $jumlah
        ]);
    }

    public function search(Request $request)
    {
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title and body columns from the posts table
        $data = Article::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->where('user_Id', '=', session('LoggedUser'))
            ->paginate(5);

        $jumlah = Article::where('user_id', '=', session('LoggedUser'));


        // Return the search view with the resluts compacted
        return view('admin.dashboard')->with([
            'data' => $data,
            'jumlah' => $jumlah
        ]);
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
        return view('admin.tambahArtikel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $data = $request->request->all();
        $data['user_id'] = session('LoggedUser');
        $data['photo'] = $request->file('photo')->store(
            'assets/article',
            'public'
        );

        Article::create($data);
        return redirect()->route('dashboard');
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
        $data = Article::findOrfail($id);
        return view('admin.ubahArtikel', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ArticleRequest $request, $id)
    {
        $update = Article::findOrFail($id);

        $data = $request->all();

        if ($request->file('photo')  != "") {
            $data['photo'] = $request->file('photo')->store(
                'assets/article',
                'public'
            );
        }

        $update->update($data);

        if ($update) {
            return redirect()->route('dashboard');
        } else {
            return back()->with('fail', 'Something went wrong, try again later');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Article::findOrFail($id);
        $item->delete();
        return redirect()->route('dashboard');
    }
}
