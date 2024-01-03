<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Http\Enums\RoleEnums;
use App\Http\Enums\Status;
use App\Http\Enums\StatusEnums;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'username',
        'first_name',
        'last_name',
        'email',
        'password',
        'phone_number',
        'role',
        'status',
        'slug',
        'profile_photo',
        'skpReview',
        'secret_question',
        'secret_answer'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getFullNameAttribute()
    {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function messagesSent() {
        return $this->hasMany(Chat::class, 'sender_id', 'id');
    }

    public function messagesReceived() {
        return $this->hasMany(Chat::class, 'receiver_id', 'id');
    }

    public function profile()
    {
        return $this->hasOne(Profile::class, 'user_id');
    }

    public function interests()
    {
        return $this->belongsToMany(Interest::class, 'user_interest', 'user_id', 'interest_id');
    }

    public function scopeMentor($query)
    {
        $query->where(['role' => RoleEnums::MENTOR->value]);
    }

    public function scopeLearner($query)
    {
        $query->where(['role' => RoleEnums::LEARNER->value]);
    }

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function isMentor()
    {
        return $this->role === RoleEnums::MENTOR->value;
    }

    public function isLearner()
    {
        return $this->role === RoleEnums::LEARNER->value;
    }

    public function isAdmin()
    {
        return $this->role === RoleEnums::ADMIN->value;
    }

    public function isEnabled()
    {
        return $this->status === StatusEnums::ENABLED->value;
    }

    public function isDisabled()
    {
        return $this->status === StatusEnums::DISABLED->value;
    }

    public function isBanned()
    {
        return $this->status === StatusEnums::BANNED->value;
    }

    public function following()
    {
        return $this->belongsToMany(User::class, 'follows', 'learner_id', 'mentor_id')
            ->withTimestamps();
    }

    public function followers()
    {
        return $this->belongsToMany(User::class, 'follows', 'mentor_id', 'learner_id')
            ->withPivot('isAccepted');
    }


    public function forums()
    {
        return $this->hasMany(Forum::class);
    }


    public static function storeUser($request)
    {

        try {
            $photo = null;
            if(!empty($request->file)){
                $photo = self::uploadPhoto($request->file('profile_photo'));
            }


            $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'username' => $request->username,
                'email' => $request->email,
                'phone_number' => $request->phone_number,
                'password' => Hash::make($request->password),
                'role' => $request->role,
                'profile_photo' => $photo,
                'status' => StatusEnums::ENABLED->value,
                'slug' => Str::slug($request->input('username'), "-"),
                'secret_question' => $request->secret_question,
                'secret_answer' => Hash::make($request->secret_answer)

            ]);

            if ($user->isMentor()) {
                $user->profile()->create([
                    'company' => $request->company,
                    'job_title' => $request->job_title,
                    'country_id' => $request->country_id,
                    'category_id' => 2,
                    'website' => ($request->website) ?? null,
                    'bio' => $request->bio,
                    'linkedin' => $request->linkedin,
                    'twitter' => ($request->twitter) ?? null,
                    'experience' => 'sgsfgs',
                    'achievement' => 'sfghsfb'
                ]);
            }
            $interests = $request->interests;
            $user->interests()->sync($interests);

            return $user;
        }catch (\Exception $e){
            return $e->getMessage();
        }
    }

    public static function recommendMentors($id)
    {
        $user = User::find($id);
        $learnerInterest = $user->interests()->pluck('interest_id');
        $mentors = User::with('interests')
        ->where('role', RoleEnums::MENTOR->value)
            ->whereHas('interests', function($query) use ($learnerInterest){
               $query->whereIn('interest_id', $learnerInterest);
            })->get();

        return $mentors;
    }

    public static function uploadPhoto($photo)
    {
        $fileName = time() . '_' . $photo->getClientOriginalName();

        $photo->move(public_path('images'), $fileName);


        return $fileName;

    }




}
