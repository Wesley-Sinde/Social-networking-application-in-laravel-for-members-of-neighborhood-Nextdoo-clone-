<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Qirolab\Laravel\Reactions\Traits\Reacts;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Qirolab\Laravel\Reactions\Contracts\ReactsInterface;

// class User extends Authenticatable
class User extends Authenticatable implements ReactsInterface
{
    use HasApiTokens, HasFactory, Notifiable, Reacts;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'location',
        'avatar',
        'verified_account',
        'country',
        'gender',
        'dob',
        'bio',
    ];

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
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
    ];
}
