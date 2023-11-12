<?php

namespace App\Http\Controllers;

use App\Models\Portofolio;
use Illuminate\Http\Request;

class PortofolioController extends Controller
{
    public function index()
    {
        $portfolios = Portofolio::where('is_published', true)->get();
        return view('portofolio.portofolio', compact('portfolios'));
    }

    public function show($slug)
    {
        $portfolio = Portofolio::where('slug', $slug)->first();

        if (!$portfolio || !$portfolio->is_published) {
            abort(404);
        }

        return view('portofolio.portofolio-detail', compact('portfolio'));
    }

}
