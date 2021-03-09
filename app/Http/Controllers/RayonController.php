<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rayon;

class RayonController extends Controller
{
    public function index()
    {
        $rayons = Rayon::all(); //ambil semua data dari model Siswa/table 'siswas'
        // dd($rayons); => untuk cek data

        return view('rayon.index', compact('rayons')); //menampilkan view siswa/index.blade.php
    }

    public function create()
    {
        return view('rayon.create');
    }

    public function store(Request $request)
    {
        Rayon::create([
            'nama_rayon' => $request->nama_rayon,
            'pembimbing' => $request->pembimbing,
        ]);

        return redirect('/rayon');
    }

    public function edit($id)
    {
        // $rayon = Rayon::where('id', $id)->first();
        $rayon = Rayon::find($id); //ambil data dari table siswa dengan id = $id

        return view('rayon.edit', compact('rayon'));
    }

    public function update(Request $request, $id)
    {
        $rayon = Rayon::find($id)->update([
            'nama_rayon' => $request->nama_rayon,
            'pembimbing' => $request->pembimbing,
        ]);

        return redirect('/rayon');
    }

    public function delete($id)
    {
        Rayon::find($id)->delete();

        return redirect('/rayon');
    }
}
