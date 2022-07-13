<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Userinboxes extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'sender_id', 'message', 'read', 'user_id'];

    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
