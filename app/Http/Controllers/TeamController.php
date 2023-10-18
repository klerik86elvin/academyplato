<?php

namespace App\Http\Controllers;

use App\Models\Worker;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function index()
    {
        $workers = Worker::orderBy('sort_order','asc')->get();
        return view('teams.index', compact('workers'));
    }
}
