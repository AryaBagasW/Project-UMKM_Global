<?php

namespace App\Http\Controllers;

use App\Models\MasterKenis;
use Illuminate\Http\Request;

class MasterJenisController extends Controller
{
    public function index()
    {
        $jenis = MasterKenis::all();

        return response()->json($jenis);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'urai' => 'required|max:255'
        ]);

        $jenis = MasterKenis::create($request->all());
        return($jenis);
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'urai' => 'required|max:255'
        ]);

        $jenis = MasterKenis::find($id);
        $jenis->update($request->all());
    }

    public function destroy(Request $request, int $id)
    {
        $jenis = MasterKenis::find($id);
        $jenis->delete();

        return("delete success");
    }
}
