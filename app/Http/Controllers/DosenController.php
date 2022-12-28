<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\DosenEloquent;


class DosenController

{
    public function index()
    {
        $dsn = DosenEloquent::all();
        return view('DosenEloqORM', ['data' => $dsn], ['title' => 'Dosen']);
    }
    public function insert()
    {
        DosenEloquent::create([
            'nidn' => '1001',
            'nama' => 'Patria Kusumaningrum',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Karawang',
            'tempat_lahir' => 'Karawang',
            'tanggal_lahir' => '1987-09-04',
            'photo' => 'Pemandangan Karawang',
        ]);
        return "Berhasil disimpan";
    }
    public function delete()
    {
        $dsn = DosenEloquent::where('nama', 'Patria Kusumaningrum')->delete();
        return "Berhasil dihapus";
    }
    public function update()
    {
        $dsn = DosenEloquent::where('id', 1)->first()->update([
            'nama' => 'Suharno Atmojo'
        ]);
        return "Berhasil diupdate";
    }
}
