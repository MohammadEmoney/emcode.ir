<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('front.portfolios.index');
    }

    public function show(Portfolio $portfolio)
    {
        return view('front.portfolios.show', compact('portfolio'));
    }
}
