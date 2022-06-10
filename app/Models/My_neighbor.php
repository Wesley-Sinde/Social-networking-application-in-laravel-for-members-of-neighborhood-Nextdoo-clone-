<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Qirolab\Laravel\Reactions\Traits\Reactable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Qirolab\Laravel\Reactions\Contracts\ReactableInterface;

class My_neighbor extends Model implements ReactableInterface
{
  use HasFactory, Reactable;
  use Sluggable;

  protected $fillable = ['id', 'level', 'location', 'title', 'slug', 'description', 'image_path', 'user_id'];

  public function user()
  {
    return $this->belongsTo(User::class);
  }

  public function sluggable(): array
  {
    return [
      'slug' => [
        'source' => 'title'
      ]
    ];
  }
}
