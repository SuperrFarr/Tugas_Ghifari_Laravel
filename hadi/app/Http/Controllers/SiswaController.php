<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class SiswaController extends Controller
{
    public function show($id)
{
    $siswa = user::findOrFail($id);
    return view('siswa.show', compact('siswa'));
}

    public function destroy($id)
{
    $siswa = user::findOrFail($id);
    $siswa->delete();

    return redirect()->route('siswa.index')->with('success', 'Data siswa berhasil dihapus.');
}

    public function index()
    {
        $siswa = User::all();
        return view('siswa.index', compact('siswa'));
    }

    public function create()
    {
        return view('siswa.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'nis' => 'required',
            'kelas' => 'required',
            'jurusan' => 'required',
            'password' => 'required|min:6'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'nis' => $request->nis,
            'kelas' => $request->kelas,
            'jurusan' => $request->jurusan,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('siswa.index')->with('success', 'Siswa berhasil ditambahkan!');
    }
}

   


