<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;

    protected $fillable = ['learner_id', 'mentor_id', 'isAccepted'];

    public function learner()
    {
        return $this->belongsTo(User::class, 'learner_id');
    }
}
