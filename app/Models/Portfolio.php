<?php

namespace App\Models;

use App\Scopes\ImageScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'date',
    ];

    protected $casts = [
        'date' => 'datetime'
    ];

    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function booted()
    {
        static::addGlobalScope(new ImageScope);
    }

    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }
}
