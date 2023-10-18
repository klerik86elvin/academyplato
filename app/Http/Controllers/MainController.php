<?php

namespace App\Http\Controllers;

use App\Models\MainSlider;
use App\Models\PlatoIntro;
use App\Models\Service;
use App\Models\Worker;
use Illuminate\Http\Request;
use Auth;

class MainController extends Controller
{
    public function index()
    {
        $mainSlider = MainSlider::all();
        $locale = app()->getlocale();
        $platoIntro = PlatoIntro::all();
        $services = Service::all();
        $sliders = $mainSlider->translate('locale', $locale);
        $workers = Worker::all()->translate('locale', $locale)->take(6);
        return view('main.index', [
            'main_sliders' => $sliders,
            'workers' => $workers,
            'platoIntro' => $platoIntro,
            'services' => $services,
        ]);
    }
}
