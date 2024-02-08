<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.user.index', [
            'user' => User::orderBy('is_admin', 'desc')->paginate(5)->withQueryString()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'is_admin' => 'required',
            'photo_profil' => 'image|file|max:1024'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);
        $validatedData['telepon'] = $request->telepon;
        $validatedData['alamat'] = $request->alamat;
        if ($request->file('photo_profil')) {
            $validatedData['photo_profil'] = $request->file('photo_profil')->store('profil-images');
        }

        User::create($validatedData);

        return redirect('/dashboard/member')->with('success', 'User berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     */
    public function show($username)
    {
        return view('dashboard.user.show', [
            "user" => User::where('username', $username)->firstOrFail()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, $username)
    {
        return view('dashboard.user.edit', [
            'user' => User::where('username', $username)->firstOrFail()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user, $username)
    {
        $user = User::where('username', $username)->firstOrFail();

        $rules = [
            'password' => 'required|min:5|max:255',
            'is_admin' => 'required',
            'telepon' => '',
            'alamat' => '',
            'photo_profil' => 'image|file|max:1024'
        ];

        if ($request->username != $user->username) {
            $rules['username'] = 'required|min:3|max:255|unique:users';
        }

        if ($request->email != $user->email) {
            $rules['email'] = 'required|email:dns|unique:users';
        }


        $validatedData = $request->validate($rules);

        if ($request->file('photo_profil')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }
            $validatedData['photo_profil'] = $request->file('photo_profil')->store('profil-images');
        }

        User::where('username', $username)
            ->update($validatedData);

        return redirect('/dashboard/member')->with('success', 'User berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($username)
    {
        $user = User::where('username', $username)->first();

        if ($user->photo_profil) {
            Storage::delete($user->photo_profil);
        }

        User::where('username', $username)->delete();

        return redirect('/dashboard/member')->with('success', 'User berhasil dihapus!');
    }
}
