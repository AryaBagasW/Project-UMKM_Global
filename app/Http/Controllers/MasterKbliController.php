<?php

namespace App\Http\Controllers;

use App\Models\MasterKbli;
use Illuminate\Http\Request;

class MasterKbliController extends Controller
{
    public function index()
    {
        $kblis = MasterKbli::all();

        return response()->json($kblis);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'urai' => "required|max:255",
        ]);

        $kblis = MasterKbli::create($request->all());
        return($kblis);
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'urai' => "required|max:255"
        ]);

        $kblis = MasterKbli::find($id);
        $kblis->update($request->all());
    }

    public function delete(Request $request, int $id)
    {
        $kblis = MasterKbli::find($id);
        $kblis->delete();

        return("delete success");
    }
}

