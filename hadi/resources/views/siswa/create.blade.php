@extends('layouts.app')

@section('content')
<div class="max-w-xl mx-auto bg-white p-6 shadow rounded">
    <h2 class="text-2xl font-bold mb-4 text-blue-600">Tambah Siswa</h2>

    <form action="{{ route('siswa.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="block text-sm">Nama</label>
            <input type="text" name="name" id="name" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-3">
            <label for="email" class="block text-sm">Email</label>
            <input type="email" name="email" id="email" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-3">
            <label for="nis" class="block text-sm">NIS</label>
            <input type="text" name="nis" id="nis" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-3">
            <label for="kelas" class="block text-sm">Kelas</label>
            <input type="text" name="kelas" id="kelas" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="block text-sm">Jurusan</label>
            <input type="text" name="jurusan" id="jurusan" class="w-full border rounded px-3 py-2" required>
        </div>
        <div class="mb-4">
            <label for="password" class="block text-sm">Password</label>
            <input type="password" name="password" id="password" class="w-full border rounded px-3 py-2" required>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Simpan</button>
    </form>
</div>
@endsection
