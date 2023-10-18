<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CorporateReponsibility extends Controller
{
    public function index($id = null)
    {
        if ($id != null)
        {
            $data = \App\Models\CorporateReponsibility::findOrFail($id);
            return view('corporate-responsibility.detail', compact('data'));
        }
        $data = \App\Models\CorporateReponsibility::latest()->paginate(6);
        return view('corporate-responsibility.index', compact('data'));
    }
}
