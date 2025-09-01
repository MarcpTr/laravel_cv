<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProjectTechnology extends Model
{
    protected $table = 'projects_technologies';

    protected $fillable = [
        'project_id',
        'technologie_id',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function technology()
    {
        return $this->belongsTo(Technology::class, 'technologie_id');
    }
}