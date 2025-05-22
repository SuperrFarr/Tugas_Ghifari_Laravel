@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto mt-10">
    <div class="flex justify-between items-center mb-4">
        <h2 class="text-2xl font-bold text-blue-700">Daftar Siswa</h2>
        <a href="{{ route('siswa.create') }}"
           class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
            + Tambah Siswa
        </a>
    </div>

    @if(session('success'))
        <div class="mb-4 p-3 bg-green-100 text-green-800 rounded">
            {{ session('success') }}
        </div>
    @endif

    <table class="w-full bg-white shadow rounded">
        <thead>
            <tr class="bg-blue-100">
                <th class="py-2 px-4 border">No</th>
                <th class="py-2 px-4 border">Nama</th>
                <th class="py-2 px-4 border">Email</th>
                <th class="py-2 px-4 border">NIS</th>
                <th class="py-2 px-4 border">Kelas</th>
                <th class="py-2 px-4 border">Jurusan</th>
                <th class="py-2 px-4 border text-center">Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $index => $user)
                <tr class="border-t">
                    <td class="py-2 px-4 text-center">{{ $index + 1 }}</td>
                    <td class="py-2 px-4">{{ $user->name }}</td>
                    <td class="py-2 px-4">{{ $user->email }}</td>
                    <td class="py-2 px-4">{{ $user->nis }}</td>
                    <td class="py-2 px-4">{{ $user->kelas }}</td>
                    <td class="py-2 px-4">{{ $user->jurusan }}</td>
                    <td class="py-2 px-4 text-center space-x-2">
                        <a href="{{ route('siswa.show', $user->id) }}"
                           class="bg-green-500 text-white px-3 py-1 rounded hover:bg-green-600 text-sm">View</a>
                    
                        <form action="{{ route('siswa.destroy', $user->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus data siswa ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit"
                                    class="bg-red-500 text-white px-3 py-1 rounded hover:bg-red-600 text-sm">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
