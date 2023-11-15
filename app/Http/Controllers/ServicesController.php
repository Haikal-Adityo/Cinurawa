<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        return view('services.services');
    }

    public function propertio()
    {
        return view('services.propertio');
    }

    public function augmentedReality()
    {
        return view('services.augmented-reality');
    }

    public function virtualReality()
    {
        return view('services.virtual-reality');
    }

    public function mixedReality()
    {
        return view('services.mixed-reality');
    }

}
