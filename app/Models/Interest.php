<?php

namespace App\Models;

use App\Http\Enums\StatusEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Interest extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug', 'status'];

    public function scopeEnabled($query)
    {
        return $this->where('status', StatusEnums::ENABLED->value);
    }
}
