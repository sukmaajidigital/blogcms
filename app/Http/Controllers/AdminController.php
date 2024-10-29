<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $landing = Landing::all()->first();
        return view('admin.landing.index', compact('landing'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        $landing = Landing::findOrFail($id);
        $landing->update([
            'title' => $request->input('title'),
            'subtitle' => $request->input('subtitle'),
            'description' => $request->input('description'),
        ]);

        return redirect()->route('landing.index')->with('success', 'Data berhasil diperbarui.');
    }
}
