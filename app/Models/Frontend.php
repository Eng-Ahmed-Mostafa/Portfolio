<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Frontend extends Model
{
    protected $fillable = ['name'];

    public function prodjects()
    {
        return $this->belongsToMany(Project::class);
    }
}
