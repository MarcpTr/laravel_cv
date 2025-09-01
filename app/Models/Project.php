<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'name',
        'description',
        'live_app_url',
        'github_url',
        'img_url',
    ];

    public function technologies()
    {
        return $this->belongsToMany(Technology::class, 'projects_technologies', 'project_id', 'technologie_id');
    }
}
