<?php


namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
  use Notifiable;

  protected $table = 'admins';
  protected $guarded = array();
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
}
