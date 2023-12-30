<?php

namespace App\Models;

use App\Http\Enums\StatusEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'status'];

    public function scopeEnabled($query)
    {
        return $query->where('status', StatusEnums::ENABLED->value);
    }

    public function scopeDisabled($query)
    {
        return $query->where('status', StatusEnums::DISABLED->value);
    }

    public function profiles()
    {
        return $this->hasMany(Profile::class);
    }
}
