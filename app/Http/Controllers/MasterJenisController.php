<?php

namespace App\Http\Controllers;

use App\Models\MasterJenis;
use Illuminate\Http\Request;

class MasterJenisController extends Controller
{
    public function index()
    {
        $jenis = MasterJenis::all();

        return response()->json($jenis);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'urai' => 'required|max:255'
        ]);

        $jenis = MasterJenis::create($request->all());
        return($jenis);
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'urai' => 'required|max:255'
        ]);

        $jenis = MasterJenis::find($id);
        $jenis->update($request->all());
    }

    public function destroy(Request $request, int $id)
    {
        $jenis = MasterJenis::find($id);
        $jenis->delete();

        return("delete success");
    }
}
