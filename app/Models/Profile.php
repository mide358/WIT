<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company',
        'job_title',
        'location',
        'category_id',
        'bio',
        'linkedin',
        'twitter',
        'website',
        'experience',
        'achievement'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
