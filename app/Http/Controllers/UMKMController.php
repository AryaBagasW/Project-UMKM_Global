<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Umkm;

class UMKMController extends Controller
{
    public function index()
    {
        $umkms = Umkm::all();

        return response()->json($umkms);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_umkm' => 'required|max:255',
            'alamat' => 'required|max:255',
            'tgl_berdiri' => 'required|date',
            'no_telp' => 'required|max:15',
            'nib' => 'required|max:15',
            'npwp' => 'required|max:20'
        ]);

        $umkm = Umkm::create($request->all());
        return($umkm);
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'nama_umkm' => 'required|max:255',
            'alamat' => 'required|max:255',
            'tgl_berdiri' => 'required|date',
            'no_telp' => 'required|max:15',
            'nib' => 'required|max:15',
            'npwp' => 'required|max:20'
        ]);

        $umkm = Umkm::find($id);
        $umkm->update($request->all());
    }

    public function delete(Request $request, int $id)
    {
        $umkm = Umkm::find($id);
        $umkm->delete();

        return("delete success");
    }
}
