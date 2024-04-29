<?php

namespace App\Http\Controllers;

use App\Models\Pemilik;
use Illuminate\Http\Request;

class PemilikController extends Controller
{

    public function index()
    {
        $pemiliks = Pemilik::all();

        return response()->json($pemiliks);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'pemilik_nama' => 'required|max:255',
            'pemilik_nik' => 'required|max:16',
            'pemilik_alamat' => 'required|max:255',
        ]);

        $pemilik = Pemilik::create($request->all());
        return($pemilik);
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'pemilik_nama' => 'required|max:255',
            'pemilik_nik' => 'required|max:16',
            'pemilik_alamat' => 'required|max:255',
        ]);

        $pemilik = Pemilik::find($id);
        $pemilik->update($request->all());
    }


    public function delete(Request $request, int $id)
    {
        $pemilik = Pemilik::find($id);
        $pemilik->delete();

        return("delete success");
    }
}
