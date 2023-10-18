<?php

namespace App\Http\Controllers;

use App\Models\Ambassador;
use Illuminate\Http\Request;

class AmbassadorController extends Controller
{
    public function index()
    {
        $data = Ambassador::all();
//        return $data;
        return view('ambassador.index', compact('data'));
    }
}
