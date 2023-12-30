<?php

namespace App\Models;

use App\Http\Enums\StatusEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forum extends Model
{
    use HasFactory;

    protected $fillable = ['description', 'parent_id', 'slug', 'user_id', 'status'];

    public function enabled($query)
    {
        return $query->where('status', StatusEnums::ENABLED->value);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function children()
    {
        return $this->hasMany(Forum::class, 'parent_id', 'id');
    }
}
