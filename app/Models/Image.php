<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'src', 'alt', 'feature_image'
    ];

    /**
     * Get the parent imageable model.
     */
    public function imageable()
    {
        return $this->morphTo();
    }
}
