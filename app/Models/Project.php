<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function guides()
    {
        return $this->hasMany(Guide::class, 'project_id');
    }
    use HasFactory;
}
