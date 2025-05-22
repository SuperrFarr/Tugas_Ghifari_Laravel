@extends('layouts.app')

@section('content')
<div class="max-w-3xl mx-auto mt-10 bg-white shadow rounded-lg p-8">
    <h2 class="text-3xl font-bold text-blue-700 mb-6">Detail Siswa</h2>

    <div class="space-y-4 text-gray-700">
        <div><strong>Nama:</strong> {{ $siswa->name }}</div>
        <div><strong>Email:</strong> {{ $siswa->email }}</div>
        <div><strong>NIS:</strong> {{ $siswa->nis }}</div>
        <div><strong>Kelas:</strong> {{ $siswa->kelas }}</div>
        <div><strong>Jurusan:</strong> {{ $siswa->jurusan }}</div>
    </div>

    <div class="mt-6">
        <a href="{{ route('siswa.index') }}" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded">← Kembali</a>
    </div>
</div>
@endsection
