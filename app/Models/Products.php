<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Products extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'code',
        'description',
        'width',
        'height'
    ];

    public function categories()
    {
        return $this->belongsToMany(Categories::class);
    }
}
