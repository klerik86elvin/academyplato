<?php

namespace App\Http\Controllers;


use App\Models\{Worker, WorkerOfMonth};
use Illuminate\Http\Request;
use Auth;
use Carbon\Carbon;
class WorkerController extends Controller
{
    public function index($id = null)
    {
        $year = Carbon::now()->year;

        if($id != null)
        {
            $workers = WorkerOfMonth::whereYear('date', '=', $year)->whereMonth('date', $id)->get();
            return view('worker.detail', compact('workers'));
        }

       $workers = WorkerOfMonth::whereYear('date', '=', $year)->select(\DB::raw('month(date) as month'))->get()->pluck('month')->toArray();
//       dd($workers)
//              ->whereMonth('date', '=', $month);

         return view('worker.index', ['workers' => $workers]);
    }
}
