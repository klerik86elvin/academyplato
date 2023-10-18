<?php

namespace App\Http\Controllers;

use App\Models\FAQ;
use Illuminate\Http\Request;

class FAQController extends Controller
{
    public function index()
    {
        $data = FAQ::all();
        return view('faq.index', compact('data'));
    }
}
