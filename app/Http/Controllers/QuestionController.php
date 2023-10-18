<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $data = Question::all();
        return view('etik-kodeks.content', compact('data'));
    }
}
