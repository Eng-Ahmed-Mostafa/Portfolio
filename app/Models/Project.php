<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'image',
        'preview_url',
        'preview_code',
    ];

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }

}
