<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return User::where('status', 'siswa')->get();
    }

    public function staff()
    {
        return User::where('status', 'admin')->get();
    }

    public function studentsCount()
    {
        return User::where('status', 'siswa')->get()->count();
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
        $user = new User;
        $user->nisn = $request->nisn;
        $user->nama = $request->nama;
        $user->kelas = $request->kelas;
        $user->jurusan = $request->jurusan;
        $user->alamat = $request->alamat;
        $user->telp = $request->telp;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->angkatan = $request->angkatan;
        $user->status = $request->status;
        $user->aktif = $request->aktif;
        $user->save();
        return response()->json([
            'msg' => '1 Data Recorded',
            'status' => $request->status,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //        

        $user = User::findOrFail($id);

        $user->nisn = $request->nisn;
        $user->nama = $request->nama;
        $user->kelas = $request->kelas;
        $user->jurusan = $request->jurusan;
        $user->alamat = $request->alamat;
        $user->telp = $request->telp;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->angkatan = $request->angkatan;
        $user->status = $request->status;
        $user->aktif = $request->aktif;

        $user->save();
        return response()->json([
            'msg' => '1 Data Updated',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        User::findOrFail($id)->delete();
        return '1 Data Deleted';
    }

    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user) {
            if ($user->password == $request->password) {
                return response()->json([
                    'msg' => 'Login Success',
                    'status' => $user->status,
                ]);
            } else {
                return response()->json([
                    'status' => 'Login Fail',
                    'msg' => 'Your password or email is invalid'
                ]);
            }
        } else {
            return 'Register your account first ! ';
        }
    }
}
