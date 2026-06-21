<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable = [
        'title',
        'description',
        'tech_stack',
        'image_url',
        'project_url',
        'category',
    ];

    protected function casts(): array
    {
        return [
            'tech_stack' => 'array',
        ];
    }
}
