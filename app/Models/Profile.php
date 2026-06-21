<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'name',
        'title',
        'sub_title',
        'about_text',
        'email',
        'github_url',
        'linkedin_url',
        'instagram_url',
        'profile_photo',
    ];
}
