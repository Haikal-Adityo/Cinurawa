<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $portfolios = Portofolio::where('is_published', true)->get();
        return view('index', compact('portfolios'));
    }
    
}