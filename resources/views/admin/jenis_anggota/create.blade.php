@extends('layouts.admin')

@section('header', 'Tambah Jenis Anggota Baru')

@section('content')
    <form action="{{ route('jenis_anggota.store') }}" method="POST" class="space-y-6 bg-[#3B2818] p-8 rounded-lg shadow-xl">
        @csrf

        <div class="mb-4">
            <label for="kode_jenis_anggota" class="block text-white">Kode Jenis Anggota</label>
            <input type="text" id="kode_jenis_anggota" name="kode_jenis_anggota" class="mt-1 block w-full border p-2 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
            @error('kode_jenis_anggota')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="jenis_anggota" class="block text-white">Jenis Anggota</label>
            <input type="text" id="jenis_anggota" name="jenis_anggota" class="mt-1 block w-full border p-2 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
            @error('jenis_anggota')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-4">
            <label for="max_pinjam" class="block text-white">Max Pinjam</label>
            <input type="text" id="max_pinjam" name="max_pinjam" class="mt-1 block w-full border p-2 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500" required>
        </div>

        <div class="mb-4">
            <label for="keterangan" class="block text-white">Keterangan</label>
            <input type="text" id="keterangan" name="keterangan" class="mt-1 block w-full border p-2 rounded focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
        </div>

        <button type="submit" class="w-full bg-[#5C3A21] text-gold-400 px-6 py-3 rounded-md shadow-lg hover:bg-brown-800 focus:outline-none focus:ring-2 focus:ring-gold-500 transition duration-300">
            Simpan Jenis Anggota
        </button>
    </form>
@endsection
