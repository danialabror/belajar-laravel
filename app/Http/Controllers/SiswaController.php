<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;
use App\Models\SiswaView;  //untuk memanggil model Siswa = table siswas
use App\Models\Rayon;

class SiswaController extends Controller
{
    public function index()
    {
        $siswas = SiswaView::all(); //ambil semua data dari model Siswa/table 'siswas'
        // dd($siswas); => untuk cek data

        return view('siswa.index', compact('siswas')); //menampilkan view siswa/index.blade.php
    }

    public function create()
    {
        $rayons = Rayon::all();

        return view('siswa.create', compact('rayons')); //
    }

    public function store(Request $request)
    {
        Siswa::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'id_rayon' => $request->id_rayon,
            'rombel' => $request->rombel,
        ]);

        return redirect('/siswa');
    }

    public function edit($id)
    {
        // $siswa = Siswa::where('id', $id)->first();
        $siswa = Siswa::find($id); //ambil data dari table siswa dengan id = $id

        return view('siswa.edit', compact('siswa'));
    }

    public function update(Request $request, $id)
    {
        $siswa = Siswa::find($id)->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'id_rayon' => $request->id_rayon,
            'rombel' => $request->rombel,
        ]);

        return redirect('/siswa');
    }

    public function delete($id)
    {
        Siswa::find($id)->delete();

        return redirect('/siswa');
    }
}