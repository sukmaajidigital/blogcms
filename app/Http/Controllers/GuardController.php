<?php

namespace App\Http\Controllers;

use App\Models\Landing;
use Illuminate\Http\Request;

class GuardController extends Controller
{
    public function index()
    {
        $landing = Landing::all()->first();
        return view('guard.index', compact('landing'));
    }
}
