<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        $portfolios = Portofolio::where('is_published', true)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('index', compact('portfolios'));
    }
    
}