<?php

namespace App\Models;

use App\Http\Enums\AccordionEnums;
use App\Http\Enums\RoleEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'slug', 'image', 'duration', 'price'];

    public function faqs()
    {
        return $this->hasMany(Accordion::class, 'parent_id')
            ->where('type', AccordionEnums::COURSE_FAQS->value);
    }

    public function curriculum()
    {
        return $this->hasMany(Accordion::class, 'parent_id')
            ->where('type', AccordionEnums::COURSE_CURRICULUM->value);
    }


    public function mentors()
    {
        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id')
            ->where('type', RoleEnums::MENTOR->value)
            ->withTimestamps();
    }

    public function learners()
    {
        return $this->belongsToMany(User::class, 'course_user', 'course_id', 'user_id')
            ->where('type', RoleEnums::LEARNER->value)
            ->withTimestamps();
    }
}
