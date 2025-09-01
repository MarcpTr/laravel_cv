<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Technology extends Model
{
    protected $fillable = [
        'name',
        'icon_url',
        'is_active',
    ];

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'projects_technologies', 'technologie_id', 'project_id');
    }
}
