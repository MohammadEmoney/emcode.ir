<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsLetterController extends Controller
{
    public function subscribe()
    {
        return back()->with(['success' => 'Your Email submitted successfully']);
    }
}
