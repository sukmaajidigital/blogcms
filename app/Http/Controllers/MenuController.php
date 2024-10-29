<?php

// app/Http/Controllers/MenuController.php
namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::orderBy('order')->get();
        return view('admin.menus.index', compact('menus'));
    }

    public function create()
    {
        return view('admin.menus.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'route' => 'required|string|max:255|unique:menus',
            'method' => 'required|in:GET,POST,PUT,DELETE',
            'view_name' => 'nullable|string|max:255',
        ]);

        Menu::create($request->all());

        return redirect()->route('menus.index')->with('success', 'Menu added successfully');
    }

    public function edit(Menu $menu)
    {
        return view('admin.menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required|string|max:255',
            'route' => 'required|string|max:255|unique:menus,route,' . $menu->id,
            'method' => 'required|in:GET,POST,PUT,DELETE',
            'view_name' => 'nullable|string|max:255',
        ]);

        $menu->update($request->all());

        return redirect()->route('menus.index')->with('success', 'Menu updated successfully');
    }

    public function destroy(Menu $menu)
    {
        $menu->delete();
        return redirect()->route('menus.index')->with('success', 'Menu deleted successfully.');
    }
}
