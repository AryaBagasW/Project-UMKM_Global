<?php

namespace App\Http\Controllers;

use App\Models\MasterSektor;
use Illuminate\Http\Request;

class MasterSektorController extends Controller
{
    public function index()
    {
        $sektors = MasterSektor::all();

        return response()->json($sektors);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'urai' => "required|max:255"
        ]);

        $sektors = MasterSektor::create($request->all());
        return($sektors);
    }

    public function update(Request $request, int $id)
    {
        $validated = $request->validate([
            'urai' => "required|max:255"
        ]);

        $sektors = MasterSektor::find($id);
        $sektors->update($request->all());
    }

    public function delete(Request $request, int $id)
    {
        $sektors = MasterSektor::find($id);
        $sektors->delete();

        return("delete success");
    }
}

