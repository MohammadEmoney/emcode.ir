<?php

namespace App\Traits;

use App\Models\Portfolio;

trait HomeTrait
{
    public function getPortfolios()
    {
        return Portfolio::withImage()->orderByDesc('date')->take(10)->get();
    }
}
