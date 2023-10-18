<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function index($id=null)
    {
        $locale = app()->getlocale();
        if ($id) {
            $service = Service::find($id)->translate('locale', $locale);
            return view('services.detail', [
                'service' => $service
            ]);
        } else {
            $services = Service::all()->translate('locale', $locale);
            return view('services.index', [
                'services' => $services
            ]);
        }
    }
}
