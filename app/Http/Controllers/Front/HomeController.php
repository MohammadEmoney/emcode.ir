<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Traits\HomeTrait;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    use HomeTrait;

    public function index()
    {
        $data = [
            'portfolios' => $this->getPortfolios()
        ];
        return view('front.index', compact('data'));
    }
}
